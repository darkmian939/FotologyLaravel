<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
        'IDcategoria',
        'Nombre',
        'Descripcion',
        'IDportafolio',
    ];

    public $timestamps = false;
}
