<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Fotografo extends Authenticatable
{
    use Notifiable;

    protected $table = 'fotografos';
    protected $primaryKey = 'IDfotografo';
    public $incrementing = true;

    protected $fillable = [
        'IDfotografo', 'Nombre_fotografo', 'Foto_de_perfil', 'Descripcion', 'Email', 'Contrasena', 'Direccion', 'Telefono', 'Portafolio'
    ];

    protected $hidden = [
        'Contrasena'
    ];

    public function getAuthPassword()
    {
        return $this->Contrasena;
    }
}