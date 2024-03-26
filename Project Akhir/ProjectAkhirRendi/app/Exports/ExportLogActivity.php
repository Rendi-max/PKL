<?php

namespace App\Exports;

use App\Models\LogActivity;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportLogActivity implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = LogActivity::join('users', 'users.id', '=', 'user_id')->select('users.email', 'log_activities.*')->get();
        return $data;
    }
}
