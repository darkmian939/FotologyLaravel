<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Cliente;
use App\Models\Fotografo;
use App\Models\Administrador;

class LoginController extends Controller
{
    public function showUsuarioLoginForm()
    {
        return view('InicioDeSesion.usuario');
    }

    public function usuarioLogin(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Clave' => 'required|string'
        ]);

        $usuario = Cliente::where('email', $request->Email)->first();

        if ($usuario && Hash::check($request->Clave, $usuario->password)) {
            Auth::login($usuario);
            return redirect()->route('PaginaClientes.pagina');
        }

        return back()->with('error', 'Credenciales incorrectas.');
    }

    public function showUsuarioRegisterForm()
    {
        return view('InicioDeSesion.registrousuario');
    }
    
    public function usuarioRegister(Request $request)
    {
        $request->validate([
            'nameUser' => 'required|string|max:255',
            'username' => 'nullable|string|max:90|unique:clientes',
            'phone' => 'required|string|max:15',
            'document' => 'nullable|string|max:50|unique:clientes',
            'birthday' => 'nullable|date',
            'email' => 'required|string|email|max:255|unique:clientes',
            'contrasena' => 'required|string|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPerfilPath = $request->file('image')->store('fotos_perfil');

        $cliente = new Cliente([
            'nameUser' => $request->input('nameUser'),
            'username' => $request->input('username'),
            'phone' => $request->input('phone'),
            'document' => $request->input('document'),
            'birthday' => $request->input('birthday'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('contrasena')),
            'image' => $fotoPerfilPath,
        ]);

        $cliente->save();

        Session::flash('success', '¡Registro exitoso! Por favor, inicia sesión.');

        return redirect()->route('InicioDeSesion.usuario');
    }

    public function pagina()
    {
        return view('PaginaClientes.pagina'); 
    }

    public function showFotografoLoginForm()
    {
        return view('InicioDeSesion.fotografo');
    }

    public function fotografoLogin(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Clave' => 'required|string'
        ]);

        $fotografo = Fotografo::where('email', $request->Email)->first();

        if ($fotografo && Hash::check($request->Clave, $fotografo->password)) {
            Auth::login($fotografo);
            return redirect()->route('PaginaFotografos.PaginaFotografo');
        }

        return back()->with('error', 'Credenciales incorrectas.');
    }

    public function showRegistroFotografoForm()
    {
        return view('InicioDeSesion.registrofotografo');
    }

    public function registroFotografo(Request $request)
    {
        $request->validate([
            'nameUser' => 'required|string|max:255',
            'username' => 'required|string|max:90|unique:fotografos',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:fotografos',
            'adress' => 'required|string|max:90',
            'birthday' => 'required|date',
            'description' => 'nullable|string',
            'contrasena' => 'required|string|min:6',
            'foto_perfil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPerfilPath = $request->file('foto_perfil')->store('fotos_perfil');

        $fotografo = new Fotografo([
            'nameUser' => $request->input('nameUser'),
            'username' => $request->input('username'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'adress' => $request->input('adress'),
            'birthday' => $request->input('birthday'),
            'description' => $request->input('description'),
            'password' => Hash::make($request->input('contrasena')),
            'image' => $fotoPerfilPath,
            'facebook' => $request->input('facebook', ''),  // Asignar valor vacío si no se proporciona
            'instagram' => $request->input('instagram', ''),  // Asignar valor vacío si no se proporciona
        ]);

        $fotografo->save();

        Session::flash('success', '¡Registro exitoso! Por favor, inicia sesión.');

        return redirect()->route('InicioDeSesion.fotografo');
    }


    public function showAdministradorLoginForm()
    {
        return view('InicioDeSesion.administrador');
    }

    public function administradorLogin(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Clave' => 'required|string'
        ]);

        $administrador = Administrador::where('email', $request->Email)->first();

        if ($administrador && Hash::check($request->Clave, $administrador->password)) {
            Auth::login($administrador);
            return redirect()->route('PaginaAdministrador.bienvenida');
        }

        return back()->with('error', 'Credenciales incorrectas.');
    }
}