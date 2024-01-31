<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;
    protected $table = "index";
    protected $guarded = "id";
    protected $primaryKey = "id";
    // protected $fillable =[
    //     'term', 'berita_id', 'jumlah'
    // ];

    public function berita(){
        return $this->belongsTo(BeritaModel::class, "berita_id", "id");
    }
}
