<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['name_user', 'email', 'password', 'id_role', 'avatar', 'id_poli'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }
}
