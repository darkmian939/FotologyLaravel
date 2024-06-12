<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

// Inicio sesión cliente
Route::get('/inicio-de-usuario', [LoginController::class, 'showUsuarioLoginForm'])->name('InicioDeSesion.usuario');
Route::post('/usuario-login', [LoginController::class, 'usuarioLogin'])->name('usuario.login');
// Registro cliente
Route::get('/registrousuario', [LoginController::class, 'showUsuarioRegisterForm'])->name('InicioDeSesion.registrousuario');
Route::post('/registro-usuario', [LoginController::class, 'usuarioRegister'])->name('registro.usuario');

// Inicio sesión fotógrafo
Route::get('/fotografo', [LoginController::class, 'showFotografoLoginForm'])->name('InicioDeSesion.fotografo');
Route::post('/fotografo-login', [LoginController::class, 'fotografoLogin'])->name('fotografo.login');
// Registro fotógrafo
Route::get('/registrofotografo', [LoginController::class, 'showRegistroFotografoForm'])->name('InicioDeSesion.registrofotografo');
Route::post('/registrofotografo', [LoginController::class, 'registroFotografo'])->name('registro.fotografo');

// Inicio sesión administrador
Route::get('/inicio-de-sesion/administrador', [LoginController::class, 'showAdministradorLoginForm'])->name('InicioDeSesion.administrador');
Route::post('/inicio-de-sesion/administrador', [LoginController::class, 'administradorLogin'])->name('administrador.login');
// Inicio sesion vistas
Route::get('/pagina', [LoginController::class, 'pagina'])->name('PaginaClientes.pagina');
Route::get('/recuperar-contraseña', [LoginController::class, 'showRecuperarForm'])->name('InicioDeSesion.recuperar');

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
Route::get('/pagina-fotografo', [PaginaFotografosController::class, 'PaginaFotografo'])->name('PaginaFotografos.PaginaFotografo');
Route::get('/contactoFotografo', [PaginaFotografosController::class, 'contactoFotografo'])->name('PaginaFotografos.contactoFotografo');
Route::get('/perfilFotografo', [PaginaFotografosController::class, 'perfilFotografo'])->name('PaginaFotografos.perfilFotografo');
Route::get('/editarperfilFotografo', [PaginaFotografosController::class, 'editarperfilFotografo'])->name('PaginaFotografos.editarperfilFotografo');
Route::get('/portafolio', [PaginaFotografosController::class, 'portafolio'])->name('PaginaFotografos.portafolio');
Route::get('/Categoria', [PaginaFotografosController::class, 'Categoria'])->name('PaginaFotografos.Categoria');
Route::get('/Publicacion', [PaginaFotografosController::class, 'Publicacion'])->name('PaginaFotografos.Publicacion');


// Rutas para la página de administradores
Route::get('/pagina-administrador', [PaginaAdministradorController::class, 'bienvenida'])->name('PaginaAdministrador.bienvenida');
Route::get('/pagina-administrador/cliente', [PaginaAdministradorController::class, 'Cliente'])->name('PaginaAdministrador.crudcliente');
Route::get('/pagina-administrador/fotografo', [PaginaAdministradorController::class, 'Fotografo'])->name('PaginaAdministrador.pagadministrador');
