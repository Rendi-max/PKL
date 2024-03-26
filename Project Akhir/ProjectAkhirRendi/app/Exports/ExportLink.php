<?php

namespace App\Exports;

use App\Models\Link;
use App\Models\LinkClicked;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportLink implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Link::where('user_id', Auth::id())->join('users', 'users.id', '=', 'user_id')->select('users.email', 'links.*')->get();
        return $data;
    }
}
