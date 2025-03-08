<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjamin extends Model
{
    use HasFactory;

    protected $table = 'penjamin';
    protected $primaryKey = 'id_penjamin';
    protected $fillable = ['nmpenjamin', 'alamat', 'phone'];

    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'id_penjamin');
    }
}
