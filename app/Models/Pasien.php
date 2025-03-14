<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien'; 

    public $timestamps = false; 
    protected $fillable = [
        'nomrm', 
        'nama_pasien', 
        'nik', 
        'gender', 
        'alamat', 
        'email', 
        'phone', 
        'point', 
        'qrcode', 
        'id_batih', 
        'id_penjamin', 
        'name_user', 
        'created_at', 
        'updated_at'
    ];
}

