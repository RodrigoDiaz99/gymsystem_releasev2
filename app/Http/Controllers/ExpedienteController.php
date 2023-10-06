<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function getUsuario(Request $request){
        $user = User::where('id', $request->user_id)->first();
        return $user;
    }
    public function store(Request $request){
        dd($request->all());

    }
}
