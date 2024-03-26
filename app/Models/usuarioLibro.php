<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarioLibro extends Model
{
    use HasFactory;
    protected $table = 'usuarioLibro';
    protected $fillable = [
        'id_libro',
        'id_usuario'
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
