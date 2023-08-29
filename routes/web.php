<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriaProductosController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=>false,'login'=>false]);

Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('login', function () {
    abort(404, 'Pagina No encontrada'); // Esto mostrará un error 403 con el mensaje 'Acceso prohibido'
});
Route::get('/inicio', [HomeController::class, 'index'])->name('home');


Route::controller(CategoriaProductosController::class)->prefix('categorias')->group(function () {
    Route::get('inicio', 'index')->name('categorias.index');
    // Route::get('/books/{id}', 'show');
    // Route::get('/books/search/{search}', 'search');
    // Route::post('/book', 'store');
});


