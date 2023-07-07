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

Route::get("/",[PosteoController::class,"Home"]);


Route::get('/login', function () {
    return view('login');
});

Route::get('/registrarse', function () {
    return view('registrarse');
});

Route::get("/inicio", [PosteoController::class,"Autenticado"])-> middleware(Autenticacion::class);




Route::post("/registrarse",[AutenticacionController::class,"RegistrarUsuario"]);
Route::post("/login",[AutenticacionController::class,"AutenticarUsuario"]);
Route::get("/logout",[AutenticacionController::class,"LogoutUsuario"])-> middleware(Autenticacion::class);
Route::post("/posteo",[PosteoController::class,"AgregarPosteo"])-> middleware(Autenticacion::class);
Route::delete('/eliminar{posteo}', [PosteoController::class, 'eliminarPosteo'])->name('posteo.destroy');


