<?php
use Illuminate\Support\Facades\Route;
Route::post('getProductos', 'getProductos')->name('productos.getProductos');
Route::post('edit', 'edit')->name('productos.edit');
