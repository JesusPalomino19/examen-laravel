<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;
    protected $table = 'libro';
    protected $fillable = [
        'autor',
        'editorial',
        'titulo'
    ];    
    
    public function resenia()
    {
        return $this->hasMany(resenia::class,'id_libro');
    }

    public function usuarioLibro()
    {
        return $this->hasOne(usuarioLibro::class,'id_libro');
    }
    
    public function libroAutor()
    {
        return $this->hasOne(LibroAutor::class,'id_libro');
    }
}
