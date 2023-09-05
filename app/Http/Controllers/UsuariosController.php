<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        return view('usuarios.index');
    }

    public function getRoles(){
        return Roles::all();
    }
}
