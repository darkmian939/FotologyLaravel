<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaAdministradorController extends Controller
{
    public function index()
    {
        return view('InicioDeSesion.administrador');
    }

    public function PaginaAdministrador()
    {
        return view('PaginaAdministrador.bienvenida');   
     }

     public function usuario()
    {
        return view('InicioDeSesion.usuario');
    }

    public function Cliente()
    {
        return view('PaginaAdministrador.crudcliente');   
     }

     public function Fotografo()
    {
        return view('PaginaAdministrador.pagadministrador');
    }



}
