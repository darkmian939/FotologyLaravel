<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaClientesController extends Controller
{
    public function pagina()
    {
        return view('PaginaClientes.pagina');
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
    public function perfilusuario()
    {
        return view('PaginaClientes.perfilusuario');
    }

    public function store(Request $request)
    {
        // Logic to handle the form submission and store the data
        // Example:
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email',
        //     // other validation rules
        // ]);

        // Save data to the database
        // ModelName::create($validatedData);

        return redirect()->route('PaginaClientes.pagina')->with('success', 'Data stored successfully!');
    }
}

