<?php

use Illuminate\Support\Facades\Route;

Route::get('getUsers', 'getUsers')->name('usuarios.getUsers');
Route::post('saveUser', 'saveUser')->name('usuario.saveUser');
