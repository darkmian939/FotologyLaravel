<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    use HasFactory;

    protected $table = 'portafolios';

    protected $fillable = [
        'IDportafolio',
        'IDfotografo',
        'Nombre_portafolio',
    ];

    public $timestamps = false;
}
