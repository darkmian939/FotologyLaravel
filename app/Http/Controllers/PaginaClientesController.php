<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaClientesController extends Controller
{
    public function pagina()
    {
        // Aquí colocarías la lógica para mostrar la página de clientes
        return view('PaginaClientes.pagina');
    }
}
