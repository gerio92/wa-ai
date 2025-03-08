<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batih extends Model
{
    use HasFactory;

    protected $table = 'batih';
    protected $primaryKey = 'id_batih';
    protected $fillable = ['nmbatih', 'nik', 'alamat', 'phone'];

    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'id_batih');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_batih');
    }
}
