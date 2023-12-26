<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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


Route::get('escritorio', [DashboardController::class, 'index'])->name('dashboard');

//users
Route::get('usuarios', [UserController::class, 'index'])->name('viewUsers');
Route::get('crearUser', [UserController::class, 'create'])->name('createUser');
Route::post('addUser', [UserController::class, 'store'])->name('storeUser');
