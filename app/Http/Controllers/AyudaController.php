<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaController extends Controller
{
    public function Ayuda() {
        return view('ayuda');
    }
}
