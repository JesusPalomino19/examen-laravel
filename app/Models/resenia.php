<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resenia extends Model
{
    use HasFactory;
    protected $table = 'resenia';
    protected $fillable = [
        'titulo',
        'contenido',
        'id_libro',
        'id_resenia'
    ];
    public function libro()
    {
        return $this->belongsTo(libro::class,'id_libro');
    }
    public function usuario()
    {
        return $this->belongsTo(usuario::class,'id_usuario');
    }
}
