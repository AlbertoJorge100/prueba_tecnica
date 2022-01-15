<?php

use App\Http\Controllers\controlador_clientes;
use App\Http\Controllers\controlador_productos;
use Illuminate\Support\Facades\Route;

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

//Rutas Clientes
Route::get('prueba/index', [controlador_clientes::class,'index'])->name('prueba.index');
Route::view('prueba/form_clientes','paginas.insert_clientes')->name('form_cliente');
Route::post('prueba/insert_cliente',[controlador_clientes::class, 'insert_cliente'])->name('insert_cliente');
Route::get('prueba/form_update_cliente/{cliente}', [controlador_clientes::class, 'form_update_cliente'])->name('form_update_cliente');
Route::post('prueba/update_cliente/{cliente}', [controlador_clientes::class, 'update_cliente'])->name('update_cliente');
Route::get('prueba/delete_cliente/{cliente}', [controlador_clientes::class, 'delete_cliente'])->name('delete_cliente');

//Rutas productos
Route::get('productos/select_productos', [controlador_productos::class, 'select_productos'])->name('select_productos');
Route::get('productos/insert_producto/', [controlador_productos::class, 'form_insert_producto'])->name('insert_producto');
Route::get('productos/form_update_producto/{producto}', [controlador_productos::class, 'form_update_producto'])->name('form_update_producto');


Route::get('/', function () {
    //return view('welcome');
    return 'hola mundo';
});
