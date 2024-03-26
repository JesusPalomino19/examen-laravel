<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'telefono'
    ];
    public function resenia()
    {
        return $this->hasMany(resenia::class,'id_usuario');
    }

    public function usuarioLibro()
    {
        return $this->hasOne(UsuarioLibro::class,'id_usuario');
    }
}
