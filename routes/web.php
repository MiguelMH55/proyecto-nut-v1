<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.home');
});

// Rutas de login y registro de usuario e index
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/home', [HomeController::class, 'index']);

/*Rutas de vista admin*/
route::view('/dashI', 'adminIni')->name('adminIni');
route::view('/dashU', 'adminUsu')->name('adminUsu');
route::view('/dashP', 'adminPer')->name('adminPer');

/*Crud Usuario*/
Route::get('usu/reg', [UsuarioController::class, 'create'])->name('usu.create');
Route::post('usu/guardar', [UsuarioController::class, 'store'])->name('usu.store');
