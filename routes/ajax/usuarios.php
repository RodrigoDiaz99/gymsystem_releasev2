<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('getUsers', 'getUsers')->name('usuarios.getUsers');
Route::post('saveUser', 'saveUser')->name('usuario.saveUser');
Route::post('getUserData', 'getUserData')->name('usuario.getUserData');
Route::post('getPermisosUsuario', 'getPermisosUsuario')->name('usuario.getPermisosUsuario');
