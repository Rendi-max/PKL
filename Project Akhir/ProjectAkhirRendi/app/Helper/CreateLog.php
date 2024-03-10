<?php
namespace App\Helper;

use App\Models\LogActivity;
use Illuminate\Support\Facades\Auth;

class CreateLog
{
    public static function createLogActivity(string $string)
    {
        $Log = new LogActivity;
        $Log->user_id   = Auth::id();
        $Log->activity  = $string;
        $Log->save();

        return;
    }
}