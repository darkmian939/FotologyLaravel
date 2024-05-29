<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaClientesController extends Controller
{
    public function pagina()
    {
        return view('PaginaClientes.Pagina');
    }

    public function fotografos()
    {
        return view('PaginaClientes.fotografos');
    }

    public function categorias()
    {
        return view('PaginaClientes.categorias');
    }

    public function contacto()
    {
        return view('PaginaClientes.contacto');
    }
}
