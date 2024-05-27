<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\InicioDeSesionController;
use App\Http\Controllers\PaginaClientesController;
use App\Http\Controllers\PaginaFotografosController;
use App\Http\Controllers\PaginaAdministradorController;


Route::get('/', function () {
    return view('index');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});

//inicio de sesion
Route::get('/usuario', [InicioDeSesionController::class, 'usuario'])->name('InicioDeSesion.usuario');
Route::get('/fotografo', [InicioDeSesionController::class, 'fotografo'])->name('InicioDeSesion.fotografo');
Route::get('/administrador', [InicioDeSesionController::class, 'administrador'])->name('InicioDeSesion.administrador');
Route::get('/recuperar-contraseña', [InicioDeSesionController::class, 'recuperar'])->name('InicioDeSesion.recuperar');
Route::get('/registrousuario', [InicioDeSesionController::class, 'mostrarFormularioRegistro'])->name('InicioDeSesion.registrousuario');
Route::get('/registrofotografo', [InicioDeSesionController::class, 'mostrarFormularioFotografo'])->name('InicioDeSesion.registroFotografo');

//pagina de cliente
Route::post('/pagina-clientes', [PaginaClientesController::class, 'pagina'])->name('PaginaClientes.P agina');


//pagina de fotografo
Route::post('/fotografo', [PaginaFotografosController::class, 'index'])->name('InicioDeSesion.fotografo');


//pagina de administrador
Route::post('/administrador', [PaginaAdministradorController::class, 'index'])->name('InicioDeSesion.administrador');
