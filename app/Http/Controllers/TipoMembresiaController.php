<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoMembresiaRequest;
use App\Models\TipoMembresia;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoMembresiaController extends Controller
{
    public function index()
    {
        return view('membresias.index');
    }

    public function getMembresias()
    {
        $getMembresias = TipoMembresia::orderByDesc('created_at')
            ->get();

        return $getMembresias;
    }
    public function create(TipoMembresiaRequest $request)
    {

        $nombre_membresia = $request->nombre_membresia;
        $precio = $request->precio;
        $dias_membresia = $request->dias_membresia;
        $descripcion_membresia = $request->descripcion_membresia;
        DB::beginTransaction();

        try {
            TipoMembresia::create([
                'nombre_membresia' => $nombre_membresia,
                'precio' => $precio,
                'dias_membresia' => $dias_membresia,
                'descripcion_membresia' => $descripcion_membresia,

            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Registro Éxitoso!');
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error', $e);
        }
    }

    public function edit(Request $request)
    {

        $iIDMembresia = $request->iIDMembresia;
        try {
            $getProducto = TipoMembresia::find($iIDMembresia);


            return response()->json($getProducto);
        } catch (Exception $e) {
            $mensaje = array(
                'iError' => true,
                'cMensaje' => $e->getMessage(),
            );
            return response()->json($mensaje);
        }
    }

    public function update(TipoMembresiaRequest $request,$id)
    {

        $nombre_membresia = $request->nombre_membresia;
        $precio = $request->precio;
        $dias_membresia = $request->dias_membresia;
        $descripcion_membresia = $request->descripcion_membresia;
        DB::beginTransaction();

        try {
            TipoMembresia::findOrFail($id)->update([
                'nombre_membresia' => $nombre_membresia,
                'precio' => $precio,
                'dias_membresia' => $dias_membresia,
                'descripcion_membresia' => $descripcion_membresia,

            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Actualizacion Éxitoso!');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', $e);
        }
    }
}
