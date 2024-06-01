<?php

use Illuminate\Support\Facades\Route;
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

// Rutas para el inicio de sesión
Route::get('/inicio-de-sesion/usuario', [InicioDeSesionController::class, 'usuario'])->name('InicioDeSesion.usuario');
Route::get('/fotografo', [InicioDeSesionController::class, 'fotografo'])->name('InicioDeSesion.fotografo');
Route::get('/inicio-de-sesion/administrador', [InicioDeSesionController::class, 'administrador'])->name('InicioDeSesion.administrador');
Route::get('/recuperar-contraseña', [InicioDeSesionController::class, 'recuperar'])->name('InicioDeSesion.recuperar');
Route::get('/registrousuario', [InicioDeSesionController::class, 'mostrarFormularioRegistro'])->name('InicioDeSesion.registrousuario');
Route::get('/registrofotografo', [InicioDeSesionController::class, 'mostrarFormularioFotografo'])->name('InicioDeSesion.registrofotografo');

// Rutas para la página de clientes
Route::get('/usuario', [InicioDeSesionController::class, 'usuario'])->name('InicioDeSesion.Usuario');
Route::get('/pagina-clientes', [PaginaClientesController::class, 'pagina'])->name('PaginaClientes.pagina');
Route::get('/fotografos', [PaginaClientesController::class, 'fotografos'])->name('PaginaClientes.fotografos');
Route::get('/categorias', [PaginaClientesController::class, 'categorias'])->name('PaginaClientes.categorias');
Route::get('/contacto', [PaginaClientesController::class, 'contacto'])->name('PaginaClientes.contacto');
Route::post('/pagina-clientes', [PaginaClientesController::class, 'store'])->name('PaginaClientes.store');
Route::get('/perfilusuario', [PaginaClientesController::class, 'perfilusuario'])->name('PaginaClientes.perfilusuario');

// Rutas para la página de fotógrafos
Route::post('/fotografo', [PaginaFotografosController::class, 'index'])->name('PaginaFotografos.index');
Route::post('/pagina-fotografo', [PaginaFotografosController::class, 'PaginaFotografo'])->name('PaginaFotografos.PaginaFotografo');

// Rutas para la página de administradores
Route::get('/pagina-administrador', [PaginaAdministradorController::class, 'index'])->name('PaginaAdministrador.index');
Route::post('/pagina-administrador/bienvenida', [PaginaAdministradorController::class, 'PaginaAdministrador'])->name('PaginaAdministrador.bienvenida');
Route::get('/pagina-administrador/cliente', [PaginaAdministradorController::class, 'Cliente'])->name('PaginaAdministrador.cliente');
Route::get('/pagina-administrador/fotografo', [PaginaAdministradorController::class, 'Fotografo'])->name('PaginaAdministrador.fotografo');
Route::get('/pagina-administrador/cliente', [PaginaAdministradorController::class, 'Cliente'])->name('PaginaAdministrador.crudcliente');
Route::get('/pagina-administrador/fotografo', [PaginaAdministradorController::class, 'Fotografo'])->name('PaginaAdministrador.pagadministrador');




