<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioDeSesionController extends Controller
{
    public function usuario()
    {
        return view('InicioDeSesion.Usuario');
    }

    public function fotografo()
    {
        return view('InicioDeSesion.Fotografo');
    }

    public function administrador()
    {
        return view('InicioDeSesion.Administrador');
    }

    public function recuperar()
    {
        return view('InicioDeSesion.Recuperar');
    }

    public function mostrarFormularioRegistro()
    {
        return view('InicioDeSesion.registrousuario');
    }

    public function mostrarFormularioFotografo()
    {
        return view('InicioDeSesion.registrofotografo');
    }
}
