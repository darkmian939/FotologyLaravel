<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaFotografosController extends Controller
{
    public function index()
    {
        return view('PaginaFotografos.Index');
    }

    public function PaginaFotografo(Request $request)
    {
        return view('PaginaFotografos.PaginaFotografo');
    }

    public function registroFotografo()
    {
        return view('RegistroFotografo');
    }
}
