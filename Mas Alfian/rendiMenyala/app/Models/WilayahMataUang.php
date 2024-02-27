<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WilayahMataUang extends Model
{
    use HasFactory;
    protected $guard ="id";
    
    public function wilayah(){
        return $this->belongsTo(wilayah::class, 'wilayah_id', 'id');
    }
}
