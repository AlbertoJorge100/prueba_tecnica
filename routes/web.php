<?php

use App\Http\Controllers\controlador_prueba;
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

Route::get('prueba/index', [controlador_prueba::class,'index'])->name('prueba.index');
Route::view('prueba/form_clientes','paginas.insert_clientes')->name('form_cliente');
Route::post('prueba/insert_cliente',[controlador_prueba::class, 'insert_cliente'])->name('insert_cliente');
Route::get('prueba/form_update_cliente/{cliente}', [controlador_prueba::class, 'form_update_cliente'])->name('form_update_cliente');
Route::post('prueba/update_cliente/{cliente}', [controlador_prueba::class, 'update_cliente'])->name('update_cliente');
Route::get('prueba/delete_cliente/{cliente}', [controlador_prueba::class, 'delete_cliente'])->name('delete_cliente');

Route::get('/', function () {
    //return view('welcome');
    return 'hola mundo';
});
