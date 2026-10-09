<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    protected $fillable = ['pelicula_id', 'nombre', 'comentarios', 'puntaje'];
}
