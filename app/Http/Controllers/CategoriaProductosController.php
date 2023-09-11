<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaProductosRequest;
use App\Models\CategoriaProductos;
use Exception;
use Illuminate\Http\Request;

class CategoriaProductosController extends Controller
{
    public function index()
    {
        return view('categorias.index');
    }

    public function getCategorias()
    {
        $getCategoria = CategoriaProductos::orderByDesc('created_at')->get();
        return $getCategoria;
    }
    public function create(CategoriaProductosRequest $request)
    {
        $nombre_categoria = $request->nombre_categoria;
        try {
            CategoriaProductos::create([
                'nombre_categoria' => $nombre_categoria,
            ]);
            return redirect()->back()->with('success', 'Registro Éxitoso!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e);
        }
    }
    public function update(Request $request)
    {
        $iIDCategoria = $request->iIDCategoria;
        try {
            $getCategoria = CategoriaProductos::where('id', $iIDCategoria)->first();
            return response()->json($getCategoria);
        } catch (Exception $e) {
            $mensaje = array(
                'iError' => true,
                'cMensaje' => $e->getMessage(),
            );
            return response()->json($mensaje);
        }
    }
    public function edit(CategoriaProductosRequest $request, $id)
    {
        $nombre_categoria = $request->nombre_categoria;

        try {
            CategoriaProductos::findOrFail($id)->update([
                'nombre_categoria' => $nombre_categoria,
            ]);
            return redirect()->back()->with('success', 'Modificacion Éxitosa!');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', $e);
        }
    }
}
