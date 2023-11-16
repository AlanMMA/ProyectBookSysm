<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablaDeLibros extends Model
{
    protected $table = 'libros';
    protected $fillable = [
        'ID_Libro',
        'Nombre',
        'año',
        'categoria',
        'Observaciones',
        'ID_Autor',
    ];


    use HasFactory;
}
