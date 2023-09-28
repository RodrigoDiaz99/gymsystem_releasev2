<?php

namespace App\Http\Controllers;

use App\Models\CorteCaja;

class CorteCajaController extends Controller
{
    public function index()
    {
        return view('cortecaja.index');
    }

    public function getCorteCaja(){

            $getCorteCaja = CorteCaja::orderByDesc('created_at')
            ->with(['usuario:id,nombre'])
            ->get();

            return $getCorteCaja;

    }
}
