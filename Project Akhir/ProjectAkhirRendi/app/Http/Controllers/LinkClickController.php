<?php

namespace App\Http\Controllers;

use App\Helper\LinkClicksCount;
use Carbon\Carbon;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkClickController extends Controller
{
    public function click(string $links, Request $request)
    {
        $destination = Link::whereRaw('BINARY short_link = ?', [$links])->first();
        $currentTime = Carbon::now();
        if ($destination != null) {
            if ($destination->expired_at >=  $currentTime || $destination->expired_at == null) {
                if ($destination->passwod != null || $destination->password != '') {
                    return redirect('/linkPassword='.$destination->short_link);
                }else{
                    LinkClicksCount::createClickLink($destination->id, $request->Ip());
                    return redirect($destination->original_link);
                }
            }else{
                return redirect('/404/Current Link Was Expired :(');
            }
        }else{
            return redirect("/404/Link Doesn't Exist !");
        }
    }
    public function indexClick(string $id)
    {
        return view('PasswordRequired', [
            'id'    => $id
        ]);
    }
    public function PasswordCheck(Request $request, string $id)
    {
        $checkLink = Link::whereRaw('BINARY short_link = ? ', [$id])->whereRaw('BINARY password = ?', [base64_encode($request->password)])->first();
        if($checkLink != null)
        {
            LinkClicksCount::createClickLink($checkLink->id, $request->Ip());
            return redirect($checkLink->original_link);
        }
        else
        {
            return back()->with('error', "Password wrong!");
        }
    }

    public function indexError($message)
    {
        return view('Message', [
            'message' => $message
        ]);
    }

    public function QrCode($id){
        return view('QR', ['id' => $id]);
    }
}
