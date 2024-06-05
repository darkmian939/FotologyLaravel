<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;

class AuthController extends Controller
{
    public function showUsuarioRegisterForm()
    {
        return view('InicioDeSesion.registrousuario');
    }

    public function usuarioRegister(Request $request)
    {
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:clientes',
            'contrasena' => 'required|string|min:6',
            'foto_perfil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPerfilPath = $request->file('foto_perfil')->store('fotos_perfil');

        $cliente = new Cliente([
            'nombre_cliente' => $request->input('nombre_cliente'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('contrasena')),
            'foto_perfil' => $fotoPerfilPath,
        ]);

        $cliente->save();

        return redirect()->route('InicioDeSesion.usuario')->with('success', 'Registro exitoso. Por favor, inicia sesión.');
    }
}