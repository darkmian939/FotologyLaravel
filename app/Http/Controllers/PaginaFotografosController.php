<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaFotografosController extends Controller
{
    public function index()
    {
        return view('PaginaFotografos.Index');
    }

    public function portafolio()
    {
        return view('PaginaFotografos.portafolio');
    }

    public function PaginaFotografo(Request $request)
    {
        return view('PaginaFotografos.PaginaFotografo');
    }

    public function registroFotografo()
    {
        return view('RegistroFotografo');
    }

    
    public function Publicacion()
    {
        return view('PaginaFotografos.Publicacion');
    }

    public function Categoria(Request $request)
    {
        $category = $request->query('category'); // Recuperar el parámetro de consulta 'category' de la URL
        return view('PaginaFotografos.Categoria', ['category' => $category]);
    }

    public function contactoFotografo()
    {
        return view('PaginaFotografos.contactoFotografo');
    }
}
