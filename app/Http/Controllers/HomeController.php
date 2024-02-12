<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ventas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fechaActual = Carbon::now();
        $inicioMes = $fechaActual->copy()->startOfMonth()->format('Y-m-d H:i:s');
        $ventas = Ventas::whereBetween('created_at', [$inicioMes, $fechaActual->format('Y-m-d H:i:s')])->count();
        $usuarios = User::whereBetween('created_at', [$inicioMes, $fechaActual->format('Y-m-d H:i:s')])->count();
        return view('home',compact('ventas','usuarios'));
    }
}
