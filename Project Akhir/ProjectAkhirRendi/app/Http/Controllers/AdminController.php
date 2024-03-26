<?php

namespace App\Http\Controllers;

use App\Exports\ExportLinks;
use App\Exports\ExportLogActivity;
use App\Exports\ExportUser;
use App\Models\Link;
use App\Models\LogActivity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

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
            'user'      => $this->_auth(),
            'data'      => User::all(),
            'link'      => Link::all()
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
        $dataUser = User::orderBy('isAdmin', 'DESC')->where('id', '!=', 1)->latest()->paginate(15);
        return view('Admin.Index.DataUser', [
            'links'     => 'user',
            'user'      => $this->_auth(),
            'dataUser' => $dataUser,
        ]);
    }
    
    public function indexLogActivity()
    {
        return view('Admin.Index.LogActivity', [
            'links'     => 'log',
            'user'      => $this->_auth(),
            'logActivity'   => LogActivity::latest()->paginate(10)
        ]);
    }

    public function ExportLog()
    {
        return Excel::download(new ExportLogActivity, 'LogActivty.xlsx');
    }

    public function ExportUser()
    {
        return Excel::download(new ExportUser, 'User.xlsx');
    }

public function ExportLink()
{
    return Excel::download(new ExportLinks, 'Links.xlsx');
}
}
