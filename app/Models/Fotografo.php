<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Fotografo extends Authenticatable
{
    protected $guard = 'fotografo';

    protected $fillable = [
        'nameUser', 'username', 'phone', 'email', 'adress', 'birthday', 'description', 'password', 'image',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
