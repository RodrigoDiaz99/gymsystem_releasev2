<?php
use Illuminate\Support\Facades\Route;
Route::post('getMembresias', 'getMembresias')->name('membresias.getMembresias');
Route::post('edit', 'edit')->name('membresias.edit');
