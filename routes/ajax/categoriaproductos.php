<?php
use Illuminate\Support\Facades\Route;
Route::post('getCategorias', 'getCategorias')->name('categorias.getCategorias');
Route::post('update', 'update')->name('categorias.update');
