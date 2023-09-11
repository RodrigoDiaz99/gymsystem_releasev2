<?php
use Illuminate\Support\Facades\Route;
Route::post('getProveedores', 'getProveedores')->name('proveedores.getProveedores');
Route::post('edit', 'edit')->name('proveedores.edit');
