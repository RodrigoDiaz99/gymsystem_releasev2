<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
Route::post('getUsuario', 'getUsuario')->name('expediente.getUsuario');
Route::post('getExpediente', 'getExpediente')->name('expediente.getExpediente');
Route::post('getExpedienteUsuario', 'getExpedienteUsuario')->name('expediente.getExpedienteUsuario');
Route::get('modificar/{id}', 'edit')->name('expediente.edit');
Route::get('pdf/{id}','pdfExpediente')->name('expediente.pdfExpediente');
