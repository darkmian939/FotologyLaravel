<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

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

    public function perfildefotografo()
    {
        return view('PaginaClientes.perfildefotografo');
    }


    public function perfilusuario()
{
    // Obtener el ID del usuario de la sesión
    $userId = session('user_id');

    // Buscar al usuario por su ID utilizando la columna 'id'
    $cliente = Cliente::find($userId);

    // Cargar la vista 'perfilusuario' pasando la variable $cliente
    return view('PaginaClientes.perfilusuario', compact('cliente'));
}

    public function editarperfilusuario()
    {
        // Obtén el ID del usuario de la sesión
        $userId = session('user_id');

        // Busca al cliente por su ID utilizando la columna 'id'
        $cliente = Cliente::find($userId);

        // Carga la vista 'editarperfilusuario' pasando la variable $cliente
        return view('PaginaClientes.editarperfilusuario', compact('cliente'));
    }

    public function updateperfilusuario(Request $request)
    {
        $userId = session('user_id');
        // Buscar el usuario por su ID utilizando la columna 'id'
        $usuario = Cliente::find($userId);
        
        // Verificar si se encontró el usuario antes de actualizar sus detalles
        if ($usuario) {
            // Actualizar los detalles del usuario
            $usuario->nameUser = $request->nameUser;
            $usuario->phone = $request->phone;
            // Actualizar otros campos según sea necesario...
    
            $usuario->save();
        } else {
            // Manejar el caso donde no se encuentra el usuario
            // Esto puede ocurrir si la sesión no contiene un 'user_id' válido
            // Puedes redirigir al usuario a una página de error o hacer cualquier otra acción apropiada.
        }
        
        return redirect()->route('PaginaClientes.perfilusuario');
    }

}

