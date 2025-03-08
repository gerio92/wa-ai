<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';
    protected $primaryKey = 'id_dokter';
    public $timestamps = false;

    protected $fillable = ['nama_dokter', 'id_poli', 'email', 'phone'];

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli', 'id_poli');
    }
}
    