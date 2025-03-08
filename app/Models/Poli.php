<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;
    
    protected $table = 'poli';
    protected $primaryKey = 'id_poli';
    public $timestamps = false;

    protected $fillable = ['nama_poli'];
    
    public function dokter()
{
    return $this->hasMany(Dokter::class, 'id_poli', 'id_poli');
}

}


