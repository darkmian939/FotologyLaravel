<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;
use App\Models\Fotografo;
use App\Models\Administrador;

class LoginController extends Controller
{
    public function showUsuarioLoginForm()
    {
        return view('usuario');
    }

    public function usuarioLogin(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Clave' => 'required|string'
        ]);

        $usuario = Cliente::where('Email', $request->Email)->first();

        if ($usuario && Hash::check($request->Clave, $usuario->Contrasena)) {
            Auth::login($usuario);
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Credenciales incorrectas.');
    }

    public function showFotografoLoginForm()
    {
        return view('fotografo');
    }

    public function fotografoLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $fotografo = Fotografo::where('Nombre_fotografo', $request->username)->first();

        if ($fotografo && Hash::check($request->password, $fotografo->Contrasena)) {
            Auth::login($fotografo);
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Credenciales incorrectas.');
    }

    public function showAdministradorLoginForm()
    {
        return view('administrador');
    }

    public function administradorLogin(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'contraseña' => 'required|string'
        ]);

        $administrador = Administrador::where('Email', $request->usuario)->first();

        if ($administrador && Hash::check($request->contraseña, $administrador->Contrasena)) {
            Auth::login($administrador);
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Credenciales incorrectas.');
    }
}

