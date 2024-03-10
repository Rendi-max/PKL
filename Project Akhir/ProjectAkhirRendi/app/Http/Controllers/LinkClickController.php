<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkClickController extends Controller
{
    public function click(string $links)
    {
        $destination = Link::where('short_link', $links)->first();
        if ($destination != null) {
            if ($destination->passwod != null) {

            }else{
                return redirect($destination->original_link);
            }
        }else{
            return back();
        }
    }
}
