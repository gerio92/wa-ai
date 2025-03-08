<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrTransaksi extends Model
{
    use HasFactory;

    protected $table = 'drtransaksi';
    protected $primaryKey = 'id_trdokter';
    public $timestamps = true;

    protected $fillable = [
        'id_pasien', 'id_poli', 'id_dokter', 'tgl_praktek',
        'antrian', 'id_praktek_dokter', 'waktu_jam', 'waktu_pending',
        'name_user', 'noregister', 'nmpasien', 'created_at', 'updated_at'
    ];
    

    protected $dates = ['tgl_praktek', 'created_at', 'updated_at'];

    // Relasi ke dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    // Relasi ke poli
    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
    public function praktekDokter()
    {
    return $this->belongsTo(PraktekDokter::class, 'id_praktek_dokter', 'id_praktek');
    }

}
