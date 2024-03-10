<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkClicked extends Model
{
    use HasFactory;
    protected $guarded = 'id';

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function link(){
        return $this->belongsTo(Link::class, 'link_id', 'id');
    }
}
