<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    protected $fillable=['task', 'status'];
    protected $id='id_task';
    protected $primaryKey='id_task';
    protected $table='tasks';
    public function toggleStatus(){
        $this->status = ! $this->status;
        return $this;
    }
}
