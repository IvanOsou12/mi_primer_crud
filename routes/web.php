<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegistroController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/admin', 'admin')->middleware('auth');
Route::view('/', 'auth/login')->middleware('auth');
Route::view('/home', 'home')->middleware('auth');
Route::view('/instrucciones', 'instrucciones')->middleware('auth');
Route::view('/repoman', 'repoman')->middleware('auth');
Route::view('/reposuc', 'reposuc')->middleware('auth');
Route::view('/repocli', 'repocli')->middleware('auth');
route::get('registro', function(){
    return view('auth.register');
});



Route::get("/sucursal",[SucursalesController::class,"index"])->name("sucursal")->middleware('auth');
Route::get("/formusuc",[SucursalesController::class,"create"])->name("sucursal.create")->middleware('auth');
Route::post("/sucural/store",[SucursalesController::class,"store"])->name("sucursal.store")->middleware('auth');
Route::get("/sucursal/{id}",[SucursalesController::class,"destroy"])->name("sucursal.destroy")->middleware('auth');
Route::put("/sucursal/{id}",[SucursalesController::class,"update"])->name("sucural.update")->middleware('auth');
Route::get("/sucursal/{id}/edit",[SucursalesController::class,"edit"])->name("sucursal.edit")->middleware('auth');

Route::get("/clientes",[ClientesController::class,"index"])->name("clientes")->middleware('auth');
Route::get("/formuclie",[ClientesController::class,"create"])->name("clientes.create")->middleware('auth');
Route::post("/clientes/store",[ClientesController::class,"store"])->name("clientes.store")->middleware('auth');
Route::get("/clientes/{id}",[ClientesController::class,"destroy"])->name("clientes.destroy")->middleware('auth');
Route::put("/clientes/{id}",[ClientesController::class,"update"])->name("clientes.update")->middleware('auth');
Route::get("/clientes/{id}/edit",[ClientesController::class,"edit"])->name("clientes.edit")->middleware('auth');

Route::get("/mant",[MantenimientoController::class,"index"])->name("mant")->middleware('auth');
Route::get("/formumant",[MantenimientoController::class,"create"])->name("mant.create")->middleware('auth');
Route::post("/mant/store",[MantenimientoController::class,"store"])->name("mant.store")->middleware('auth');
Route::get("/mant/{id}",[MantenimientoController::class,"destroy"])->name("mant.destroy")->middleware('auth');
Route::put("/mant/{id}",[MantenimientoController::class,"update"])->name("mant.update")->middleware('auth');
Route::get("/mant/{id}/edit",[MantenimientoController::class,"edit"])->name("mant.edit")->middleware('auth');

Route::get("/prod",[ProductosController::class,"index"])->name("prod")->middleware('auth');
Route::get("/formuprod",[ProductosController::class,"create"])->name("prod.create")->middleware('auth');
Route::post("/prod/store",[ProductosController::class,"store"])->name("prod.store")->middleware('auth');
Route::get("/prod/{id}",[ProductosController::class,"destroy"])->name("prod.destroy")->middleware('auth');
Route::put("/prod/{id}",[ProductosController::class,"update"])->name("prod.update")->middleware('auth');
Route::get("/prod/{id}/edit",[ClientesController::class,"edit"])->name("prod.edit")->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
