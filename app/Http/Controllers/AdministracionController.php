<?php

namespace App\Http\Controllers;

use App\Models\Modulos;
use App\Models\Permisos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministracionController extends Controller
{
    public function modulos()
    {
        return view('administracion.modulos.index');
    }

    public function getModulos()
    {
        return Modulos::all();
    }

    public function guardarModulo(Request $request)
    {
        try {
            DB::beginTransaction();
            $modulo = new Modulos();
            $modulo->nombre = $request->modulo_nombre;
            $modulo->urlBase = $request->modulo_urlBase;
            $modulo->url = $request->modulo_url;
            $modulo->descripcion = $request->modulo_descripcion;
            $modulo->icono = $request->modulo_icono;
            $modulo->esPadre = (int)filter_var($request->modulo_esPadre, FILTER_VALIDATE_BOOLEAN);;
            $modulo->modulo_padre = $request->modulo_modulo_padre;
            $modulo->save();

            $permiso = new Permisos();
            $permiso->modulo_id = $modulo->id;
            $permiso->nombre = $request->permiso_nombre;
            $permiso->clave = $request->permiso_clave;
            $permiso->descripcion = $request->permiso_descripcion;
            $permiso->save();
            DB::commit();
            return response()->json([
                'lSuccess' => true,
                'cMensaje' => '¡Correcto!',
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'lSuccess' => false,
                'cMensaje' => $ex->getMessage(),
                'cTrace' => $ex->getTrace()
            ]);
        }
    }

    public function obtenerModulo(Request $request)
    {
        try {

            return response()->json([
                'lSuccess' => true,
                'cMensaje' => '¡Correcto!',
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'lSuccess' => false,
                'cMensaje' => $ex->getMessage(),
                'cTrace' => $ex->getTrace()
            ]);
        }
    }
}
