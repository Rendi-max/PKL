<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $guarded = "id";
    protected $fillable =['negara', 'benua'];

    public function wilayah_mata_uang(){
        return $this->hasOne(WilayahMataUang::class, 'wilayah_id', 'id');
    }
    public function masyarakat(){
        return $this->hasOne(Masyarakat::class, 'wilayah_id', 'id');
    }
}
