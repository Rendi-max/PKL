<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\LogActivity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private function _auth()
    {
        $userId = Auth::id();
        $user = User::find($userId);
        return $user;
    }

    public function indexDashboard()
    {
        return view('Admin.Index.Dashboard',[
            'links'     => 'dashboard',
            'user'      => $this->_auth()
        ]);
    }

    public function indexDataLink()
    {
        return view('Admin.Index.DataLink', [
            'links'     => 'data',
            'user'      => $this->_auth(),
            'dataLinks' => Link::latest()->paginate(10)
        ]);
    }

    public function indexUsers()
    {
        $dataAdmin = User::where('isAdmin', 1)->where('id', '!=', 1)->paginate(6);
        $dataUser = User::where('isAdmin', 0)->paginate(5);

        return view('Admin.Index.DataUser', [
            'links'     => 'user',
            'user'      => $this->_auth(),
            'dataAdmin' => $dataAdmin,
            'dataUser'  => $dataUser
        ]);
    }
    
    public function indexLogActivity()
    {
        return view('Admin.Index.LogActivity', [
            'links'     => 'log',
            'user'      => $this->_auth(),
            'logActivity'   => LogActivity::latest()->paginate(20)
        ]);
    }
}
