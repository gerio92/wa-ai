<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'noregister', 'id_pasien', 'id_poli', 'id_dokter', 'diagnosa',
        'total_harga', 'point', 'name_user', 'created_at', 'updated_at'
    ];
}
