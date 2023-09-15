<?php

namespace App\Http\Controllers;

use App\Models\Modulos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermisosController extends Controller
{
    public static function getMenu()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            $rutasPermitidas = [];

            if (Auth::user()->id == 1) {
                $modulos = Modulos::all();
                foreach ($modulos as $modulo) {
                    if ($modulo->esMenu == 0) {
                        $rutasPermitidas[] = [
                            'esMenu' => $modulo->esMenu,
                            'url' => $modulo->url,
                            'icono' => $modulo->icono,
                            'tema' => $modulo->tema,
                            'nombre' => $modulo->nombre
                        ];
                    } else {
                        $submodulos = [];
                        foreach ($modulo->submodulos as $submodulo) {
                            $submodulos[] =    [
                                'url' => $submodulo->url,
                            'tema' => $submodulo->tema,
                            'icono' => $submodulo->icono,
                                'nombre' => $submodulo->nombre,
                            ];
                        };

                        $rutasPermitidas[] = [
                            'esMenu' => $modulo->esMenu,
                            'nombre_padre' => $modulo->nombre,
                            'icono_padre' => $modulo->icon,
                            'submodulo' => $submodulos

                        ];
                    }
                }
            } else {
                foreach ($user->permisos as $permiso) {
                    if ($permiso->modulo) {
                        $rutasPermitidas[] = [
                            'esMenu' => $permiso->modulo->esMenu,
                            'url' => $permiso->modulo->url,
                            'icono' => $permiso->modulo->icono,
                            'nombre' => $permiso->modulo->nombre
                        ];
                    } else {
                        $submodulos = [];
                        foreach ($permiso->submodulo->modulo->submodulos as $submodulo) {
                            $submodulos[] =    [
                                'url' => $submodulo->url,
                                'icono' => $submodulo->icono,
                                'nombre' => $submodulo->nombre,
                            ];
                        };

                        $rutasPermitidas[] = [
                            'esMenu' => $permiso->submodulo->modulo->esMenu,
                            'nombre_padre' => $permiso->submodulo->modulo->nombre,
                            'icono_padre' => $permiso->submodulo->modulo->icon,
                            'submodulo' => $submodulos

                        ];
                    }
                }
            }


            return $rutasPermitidas;
        } else {
            return null;
        }
    }
}
