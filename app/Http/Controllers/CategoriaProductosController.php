<?php

namespace App\Http\Controllers;

class CategoriaProductosController extends Controller
{
    public function index()
    {
        return view('categorias.index');
    }
}
