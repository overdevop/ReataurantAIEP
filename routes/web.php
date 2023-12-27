<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'index']);

Route::post('iniciarSesion', [LoginController::class, 'iniciarSesion'])->name('login');


Route::get('escritorio', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//users
Route::get('usuarios', [UserController::class, 'index'])->name('viewUsers')->middleware('auth');
Route::get('crearUser', [UserController::class, 'create'])->name('createUser')->middleware('auth');
Route::post('addUser', [UserController::class, 'store'])->name('storeUser')->middleware('auth');

//mesas
Route::get('mesas', [MesaController::class, 'index'])->name('viewMesas')->middleware('auth');
Route::get('crearMesa', [MesaController::class, 'create'])->name('createMesa')->middleware('auth');
Route::post('addMesa', [MesaController::class, 'store'])->name('storeMesa')->middleware('auth');
Route::get('editarMesa{mesa}', [MesaController::class, 'edit'])->name('editMesa')->middleware('auth');
Route::put('updateMesa{mesa}', [MesaController::class, 'update'])->name('updateMesa')->middleware('auth');

//productos
Route::get('productos', [ProductoController::class, 'index'])->name('viewProductos')->middleware('auth');
Route::get('crearProducto', [ProductoController::class, 'create'])->name('createProducto')->middleware('auth');
Route::post('addProducto', [ProductoController::class, 'store'])->name('storeProducto')->middleware('auth');
Route::get('editarProducto{producto}', [ProductoController::class, 'edit'])->name('editProducto')->middleware('auth');
