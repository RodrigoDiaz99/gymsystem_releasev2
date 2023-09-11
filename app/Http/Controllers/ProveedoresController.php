<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveedoresRequest;
use App\Models\Proveedores;
use Exception;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
    {
        return view('proveedores.index');
    }
    public function getProveedores()
    {
        $getProveedores = Proveedores::orderByDesc('created_at')->get();
        return $getProveedores;
    }
    public function create(ProveedoresRequest $request)
    {
        $nombre_proveedor = $request->nombre_proveedor;
        $numero_telefono = !is_null($request->numero_telefono) ? $request->numero_telefono : 'S/N';


        $rfc = !is_null($request->rfc) ? $request->rfc : 'S/RFC';
        try {
            Proveedores::create([
                'nombre_proveedor' => $nombre_proveedor,
                'numero_telefono'=> $numero_telefono,
                'rfc'=>$rfc
            ]);
            return redirect()->back()->with('success', 'Registro Éxitoso!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e);
        }
    }
    public function edit(Request $request)
    {

        $iIDProveedor = $request->iIDProveedor;
        try {
            $getProveedor = Proveedores::where('id', $iIDProveedor)->first();
            return response()->json($getProveedor);
        } catch (Exception $e) {
            $mensaje = array(
                'iError' => true,
                'cMensaje' => $e->getMessage(),
            );
            return response()->json($mensaje);
        }
    }
    public function update(ProveedoresRequest $request,$id)
    {

        $nombre_proveedor = $request->nombre_proveedor;
        $numero_telefono = !is_null($request->numero_telefono) ? $request->numero_telefono : 'S/N';
        $rfc = !is_null($request->rfc) ? $request->rfc : 'S/RFC';
        try {
            Proveedores::findOrFail($id)->update([
                'nombre_proveedor' => $nombre_proveedor,
                'numero_telefono'=> $numero_telefono,
                'rfc'=>$rfc
            ]);
            return redirect()->back()->with('success', 'Modificacion Éxitosa!');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', $e);
        }
    }
}
