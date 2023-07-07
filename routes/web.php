<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PosteoController;
use App\Http\Middleware\Autenticacion;



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
    return view('indexMenu');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrarse', function () {
    return view('registrarse');
});

Route::get('/inicio', function () {
    return view('inicio');
})-> middleware(Autenticacion::class);

Route::get('/listar',[PosteoController::class,"Listar"]);



Route::post("/registrarse",[AutenticacionController::class,"Registrar"]);
Route::post("/login",[AutenticacionController::class,"Autenticar"]);
Route::get("/logout",[AutenticacionController::class,"Logout"])-> middleware(Autenticacion::class);
Route::post("/posteo",[PosteoController::class,"AgregarPosteo"])-> middleware(Autenticacion::class);

