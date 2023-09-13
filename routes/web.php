<?php

use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriaProductosController;
use App\Http\Controllers\CorteCajaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TipoMembresiaController;
use App\Http\Controllers\UsuariosController;
use App\Models\Roles;
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
})->name('loginScreen');

Auth::routes(['register' => false, 'login' => false]);

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('login', function () {
    abort(404, 'Pagina No encontrada'); // Esto mostrará un error 403 con el mensaje 'Acceso prohibido'
});

Route::get('/inicio', [HomeController::class, 'index'])->name('home');

// Encerrado en el middleware de auth y permisos para comprobar si inició sesión y tiene permisos de módulo
Route::middleware(['auth', 'permisos'])->group(function () {
    Route::controller(CategoriaProductosController::class)->prefix('categorias')->group(function () {
        Route::get('inicio', 'index')->name('categorias.index');
        Route::post('create', 'create')->name('categorias.create');
        Route::put('edit/{id}', 'edit')->name('categorias.edit');
        require __DIR__ . '/ajax/categoriaproductos.php';
    });

    Route::controller(ProveedoresController::class)->prefix('proveedores')->group(function () {
        Route::get('inicio', 'index')->name('proveedores.index');
        Route::post('create', 'create')->name('proveedores.create');
        Route::put('update/{id}', 'update')->name('proveedores.update');
        require __DIR__ . '/ajax/proveedores.php';
    });


    Route::controller(ProductosController::class)->prefix('productos')->group(function () {
        Route::get('inicio', 'index')->name('productos.index');
        Route::post('create', 'create')->name('productos.create');
        Route::put('update/{id}', 'update')->name('productos.update');
        require __DIR__ . '/ajax/productos.php';
    });


    Route::controller(UsuariosController::class)->prefix('usuarios')->group(function () {
        Route::get('inicio', 'index')->name('usuarios.index');
        require __DIR__ . '/ajax/usuarios.php';
    });

    Route::controller(RolesController::class)->prefix('roles')->group(function () {
        require __DIR__ . '/ajax/roles.php';
    });

    Route::controller(AdministracionController::class)->prefix('administracion')->group(function () {
        Route::get('modulos', 'modulos')->name('administracion.modulos');
        Route::get('getModulos', 'getModulos')->name('administracion.getModulos');
        Route::post('guardarModulo', 'guardarModulo')->name('administracion.guardarModulo');
        Route::post('obtenerModulo', 'obtenerModulo')->name('administracion.obtenerModulo');
    });

    Route::controller(TipoMembresiaController::class)->prefix('membresias')->group(function () {
        Route::get('inicio', 'index')->name('membresias.index');
        Route::post('create', 'create')->name('membresias.create');
        Route::put('update/{id}', 'update')->name('membresias.update');
        require __DIR__ . '/ajax/membresias.php';
    });

});

Route::controller(CorteCajaController::class)->prefix('corte')->group(function () {
    Route::get('inicio', 'index')->name('corte.index');

    require __DIR__ . '/ajax/cortecaja.php';
});
