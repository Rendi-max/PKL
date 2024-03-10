<?php

namespace App\Http\Controllers;

use App\Helper\CreateLog;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
}
