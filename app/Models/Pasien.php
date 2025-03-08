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
        'nomrm', 'nama_pasien', 'noregister', 'poin'
    ];
}
