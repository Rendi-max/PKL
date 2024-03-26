<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    
    public function linkClickeds(){
        return $this->hasMany(LinkClicked::class, 'link_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $hidden = [
        'id',
        'user_id'
    ];
}
