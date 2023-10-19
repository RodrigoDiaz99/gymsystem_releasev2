<?php

namespace App\Http\Controllers;

use App\Models\Modulos;
use App\Models\Permisos;
use App\Models\Submodulos;
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

    public function getSubmodulos(Request $request)
    {
        return Modulos::find($request->id_modulo)->submodulos;
    }

    public function getMenus()
    {
        return Modulos::where('esMenu', 1)->get();
    }
    public function guardarModulo(Request $request)
    {
        try {
            DB::beginTransaction();

            switch ($request->tipoModulo) {
                case "esMenu":
                    $modulo = new Modulos();
                    $modulo->nombre = $request->modulo_nombre;
                    $modulo->url = "/";
                    $modulo->descripcion = $request->modulo_descripcion;
                    $modulo->icono = $request->modulo_icono;
                    $modulo->esMenu = "1";
                    $modulo->save();
                    break;
                case "esPadre":
                    $modulo = new Modulos();
                    $modulo->nombre = $request->modulo_nombre;
                    $modulo->url = $request->modulo_url;
                    $modulo->descripcion = $request->modulo_descripcion;
                    $modulo->icono = $request->modulo_icono;
                    $modulo->esMenu = "0";
                    $modulo->tema = $request->modulo_tema;
                    $modulo->save();
                    $permiso = new Permisos();
                    $permiso->id_modulo = $modulo->id;
                    $permiso->nombre = $request->permiso_nombre;
                    $permiso->clave = $request->permiso_clave;
                    $permiso->descripcion = $request->permiso_descripcion;
                    $permiso->save();
                    break;
                case "esSubmodulo":
                    $submodulo = new Submodulos();
                    $submodulo->id_modulo = $request->modulo_modulo_padre;
                    $submodulo->nombre = $request->modulo_nombre;
                    $submodulo->url = $request->modulo_url;
                    $submodulo->descripcion = $request->modulo_descripcion;
                    $submodulo->icono = $request->modulo_icono;
                    $submodulo->tema = $request->modulo_tema;
                    $submodulo->save();
                    $permiso = new Permisos();
                    $permiso->id_submodulo = $submodulo->id;
                    $permiso->nombre = $request->permiso_nombre;
                    $permiso->clave = $request->permiso_clave;
                    $permiso->descripcion = $request->permiso_descripcion;
                    $permiso->save();
                    break;
            }


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
