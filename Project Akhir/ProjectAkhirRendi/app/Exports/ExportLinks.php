<?php

namespace App\Exports;

use App\Models\Link;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportLinks implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Link::join('users', 'users.id', '=', 'user_id')->select('users.email', 'links.*')->get();
        return $data;
    }
}
