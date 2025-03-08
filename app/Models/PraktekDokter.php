<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PraktekDokter extends Model
{
    use HasFactory;

    protected $table = 'praktek_dokter';
    protected $primaryKey = 'id_praktek';
    public $timestamps = true;

    protected $fillable = ['nama_praktek', 'created_at', 'updated_at'];

    public function drTransaksi()
    {
        return $this->hasMany(DrTransaksi::class, 'id_praktek_dokter');
    }
}
