<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libroAutor extends Model
{
    use HasFactory;
    protected $table = 'libroAutor';
    protected $fillable = [
        'id_libro',
        'id_autor'
    ];
    public function libro()
    {
        return $this->belongsTo(libro::class,'id_libro');
    }
    public function autor()
    {
        return $this->belongsTo(autor::class,'id_autor');
    }
}
