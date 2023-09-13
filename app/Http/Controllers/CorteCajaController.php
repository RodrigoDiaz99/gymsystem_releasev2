<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorteCajaController extends Controller
{
   public function index(){
    return view('cortecaja.index');
   }
}
