<?php

namespace App\Http\Controllers;

use App\Exports\ExportLink;
use App\Models\Link;
use App\Models\User;
use App\Helper\CreateLog;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    private function _auth()
    {
        $userId = Auth::id();
        $user = User::find($userId);
        return $user;
    }

    public function statusChange(string $id)
    {
        $user = User::find($id);
        if ($user->status == 'is Active') {
            $user->status = 'is Banned';
            $user->save();
            CreateLog::createLogActivity("Banned user ". $user->email);
        }
        else
        {
            $user->status = 'is Active';
            $user->save();
            CreateLog::createLogActivity("Activate user ". $user->email);
        }
        return back();
    }

    public function dashboardUser()
    {
        return view('Users.Index.Dashboard',
        [
            'links' => 'Dashboard',
            'user'  => $this->_auth(),
        ]);
    }

    public function indexLinks()
    {
        return view('Users.Index.IndexLink',
        [
            'links'     => 'Links',
            'dataLink'  => Link::where('user_id', Auth::id())->latest()->paginate(10)
        ]);
    }

    public function indexProfile()
    {
        return view('Users.Index.Profile',
        [
            'links'     => 'Profile',
            'users'     => $this->_auth()
        ]);
    }
    public function indexLogActivity()
    {
        return view('Users.Index.LogActivity', [
            'links'     => 'Log Activity',
            'logActivity'   => LogActivity::where('user_id', Auth::id())->latest()->paginate(20)
        ]);
    }
    public function ExportLink()
    {
        return Excel::download(new ExportLink, 'Links.xlsx');
    }
}
