<?php
namespace App\Helper;

use App\Models\LinkClicked;
use Illuminate\Support\Facades\Auth;

class LinkClicksCount 
{
    public static function createClickLink(string $id, string $ip)
    {
        $userId = Auth::id();

        $linkClick = new LinkClicked;
        $linkClick->link_id = $id;
        $linkClick->user_id = ($userId != null) ? $userId : null ;
        $linkClick->ip      = $ip;
        $linkClick->save();

        return;
    }
}