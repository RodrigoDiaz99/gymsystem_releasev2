<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
Route::post('getUsuario', 'getUsuario')->name('expediente.getUsuario');
Route::post('getExpediente', 'getExpediente')->name('expediente.getExpediente');
Route::post('getExpedienteUsuario', 'getExpedienteUsuario')->name('expediente.getExpedienteUsuario');

