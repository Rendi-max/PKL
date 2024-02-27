<?php
 
namespace App\Models;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;        
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

        
class Pemuda extends Model
{
    use HasUuids;
   protected $primaryKey = 'anggota_pemuda_pancasila_id';
   protected $table = 'anggota_pemuda_pancasila';
   protected $fillable =[
    'nama',
    'wilayah_id',
    'alamat',
    'nomor_telepon',
    'email',
    'status',
    'tanggal_bergabung',
    'dibuat_pada'
   ];
   
}