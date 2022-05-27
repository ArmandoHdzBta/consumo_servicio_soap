<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumoSOAPController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agregarUsuario', [ConsumoSOAPController::class, 'index'])->name('usuario');
Route::post('/agregarUsuario', [ConsumoSOAPController::class, 'nuevoUsuario'])->name('usuario.agregar');
Route::get('/mostrarUsuarios', [ConsumoSOAPController::class, 'obtenerUsuarios'])->name('usuarios.mostrar');
Route::get('/buscarUsuario', [ConsumoSOAPController::class, 'buscarUsuarioVista'])->name('usuario.buscar.vista');
Route::post('/buscarUsuario', [ConsumoSOAPController::class, 'buscarUsuario'])->name('usuario.buscar');
Route::get('/editarUsuario', [ConsumoSOAPController::class, 'editarUsuarioVista'])->name('usuario.editar.vista');
Route::post('/editarUsuario', [ConsumoSOAPController::class, 'editarUsuario'])->name('usuario.editar');
Route::get('/eliminarUsuario', [ConsumoSOAPController::class, 'eliminarUsuarioVista'])->name('usuario.eliminar.vista');
Route::post('/eliminarUsuario', [ConsumoSOAPController::class, 'eliminarUsuario'])->name('usuario.eliminar');