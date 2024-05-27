<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioDeSesionController extends Controller
{
    public function usuario()
    {
        return view('InicioDeSesion.usuario');
    }

    public function fotografo()
    {
        return view('InicioDeSesion.fotografo');
    }

    public function administrador()
    {
        return view('InicioDeSesion.administrador');
    }

    public function mostrarFormularioRegistro()
    {
        return view('InicioDeSesion.registrousuario');
    }

    public function mostrarFormularioFotografo()
    {
        return view('InicioDeSesion.registrofotografo');
    }

    public function iniciarSesionComoUsuario()
    {
        // Lógica para iniciar sesión como usuario
    }

    public function iniciarSesionComoFotografo()
    {
        // Lógica para iniciar sesión como fotógrafo
    }

    public function iniciarSesionComoAdministrador()
    {
        // Lógica para iniciar sesión como administrador
    }
}
