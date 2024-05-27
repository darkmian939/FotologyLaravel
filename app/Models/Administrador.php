<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrador extends Authenticatable
{
    use Notifiable;

    protected $table = 'administradores';
    protected $primaryKey = 'IDadministrador';
    public $incrementing = true;

    protected $fillable = [
        'IDadministrador', 'Email', 'Contrasena'
    ];

    protected $hidden = [
        'Contrasena'
    ];

    public function getAuthPassword()
    {
        return $this->Contrasena;
    }
}