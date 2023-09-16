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
            $modulos = Modulos::all();

            // Si es administrador (role == 1), mostrar todos los módulos
            if (Auth::user()->roles_id == 1) {
                foreach ($modulos as $modulo) {
                    // Si no es menú (es módulo independiente)
                    if ($modulo->esMenu == 0) {
                        $rutasPermitidas[] = [
                            'esMenu' => $modulo->esMenu,
                            'url' => $modulo->url,
                            'icono' => $modulo->icono,
                            'tema' => $modulo->tema,
                            'nombre' => $modulo->nombre
                        ];
                    } else {
                        // Si es menú, entonces debe tener submódulos
                        $submodulos = [];
                        // Armar lista de submódulos
                        foreach ($modulo->submodulos as $submodulo) {
                            $submodulos[] =    [
                                'url' => $submodulo->url,
                                'tema' => $submodulo->tema,
                                'icono' => $submodulo->icono,
                                'nombre' => $submodulo->nombre,
                            ];
                        };

                        // Armar lista de menús con sus submódulos
                        $rutasPermitidas[] = [
                            'esMenu' => $modulo->esMenu,
                            'nombre_padre' => $modulo->nombre,
                            'icono_padre' => $modulo->icon,
                            'submodulo' => $submodulos

                        ];
                    }
                }
            } else {

                // Obtener permisos del usuario
                foreach ($modulos as $modulo) {
                    // Si no es menú (es módulo independiente)
                    if ($modulo->esMenu == 0) {
                        if ($user->permisos->where('id_modulo', $modulo->id)->first() != null) {
                            $rutasPermitidas[] = [
                                'esMenu' => $modulo->esMenu,
                                'url' => $modulo->url,
                                'icono' => $modulo->icono,
                                'tema' => $modulo->tema,
                                'nombre' => $modulo->nombre
                            ];
                        }
                    } else {
                        // Si es menú, entonces debe tener submódulos
                        $submodulos = [];
                        // Armar lista de submódulos
                        foreach ($modulo->submodulos as $submodulo) {
                            if ($user->permisos->where('id_submodulo', $submodulo->id)->first() != null) {
                                $submodulos[] =    [
                                    'url' => $submodulo->url,
                                    'tema' => $submodulo->tema,
                                    'icono' => $submodulo->icono,
                                    'nombre' => $submodulo->nombre,
                                ];
                            };
                        };
                        if (count($submodulos) > 0) {
                            // Armar lista de menús con sus submódulos
                            $rutasPermitidas[] = [
                                'esMenu' => $modulo->esMenu,
                                'nombre_padre' => $modulo->nombre,
                                'icono_padre' => $modulo->icon,
                                'submodulo' => $submodulos

                            ];
                        }
                    }
                }
            }
            return $rutasPermitidas;
        } else {
            return null;
        }
    }
}
