<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    use HasFactory;

    protected $table = 'fotografias';

    protected $fillable = [
        'IDfotografia',
        'Titulo',
        'Descripcion',
        'IDcategoria',
        'IDfotografo',
        'IDcalificacion',
    ];

    public $timestamps = false;
}
