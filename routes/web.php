<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/login', function () {
    return view('auth.register');
})->name('login');

// Procesar el inicio de sesión (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Procesar el registro de usuarios (POST)
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Cerrar sesión (POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
