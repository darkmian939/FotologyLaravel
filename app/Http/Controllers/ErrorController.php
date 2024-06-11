<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error()
    {
        // Aquí puedes manejar la lógica para la página de error
        return view('error_page');
    }
}