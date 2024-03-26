<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    protected $table = 'autor';
    protected $fillable = [
        'nombre',
        'editorial'
    ];
    public function libroAutor()
    {
        return $this->hasMany(libroAutor::class,'id_autor');
    }
}
