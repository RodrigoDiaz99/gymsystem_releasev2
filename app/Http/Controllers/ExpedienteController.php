<?php

namespace App\Http\Controllers;

use App\Models\User;

class ExpedienteController extends Controller
{
    public function index()
    {
        return view('expediente.index');
    }

    public function create()
    {
        $user = User::orderBy('id', 'asc')
        ->distinct()
        ->where('expediente', 0)
        ->get();
        return view('expediente.create',compact('user'));
    }
}
