<?php

namespace App\Http\Controllers;

use App\Models\Modulos;
use App\Models\Permisos;
use App\Models\Roles;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('usuarios.index');
    }

    public function getUsers()
    {
        return User::with('role')->get();
    }

    public function getRoles()
    {
        return Roles::all();
    }

    public function saveUser(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = null;
            $cMensaje = "";
            if ($request->user_id == null) {
                $user = new User();
                $user->password = Hash::make('123456');
                $cMensaje = "¡Se creó el usuario con éxito!";
            } else {
                $user = User::where('id', $request->user_id)->first();
                $cMensaje = "¡Se actualizó el usuario con éxito!";
            }
            $user->nombre = $request->nombre;
            $user->apellido_paterno = $request->apellido_paterno;
            $user->apellido_materno = $request->apellido_materno;
            $user->telefono = $request->telefono;
            $user->email = $request->email;
            $user->telefono_contacto = $request->telefono_contacto;
            $user->fecha_nacimiento = $request->fecha_nacimiento;
            $user->usuario = $request->usuario;
            $user->ocupacion = $request->ocupacion;
            $user->roles_id = $request->role_id;

            $user->save();
            DB::commit();
            return response()->json([
                'lSuccess' => true,
                'cMensaje' => $cMensaje,
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'lSuccess' => false,
                'cMensaje' => $ex->getMessage(),
                'cTrace' => $ex->getTrace()
            ]);
        }
    }

    public function getUserData(Request $request)
    {
        try {
            $user = User::where('id', $request->id)->where('deleted_at', null)->first();

            if ($user == null) {
                throw new Exception("No se encontró la información del usuario.s");
            }

            return response()->json([
                'lSuccess' => true,
                'cMensaje' => '¡Correcto!',
                'user' => $user
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'lSuccess' => false,
                'cMensaje' => $ex->getMessage(),
                'cTrace' => $ex->getTrace()
            ]);
        }
    }

    public function getPermisos(Request $request)
    {
        try {
            // Obtener los módulos
            $lstModulos = Modulos::where('deleted_at', null)->get();
            // Obtener datos del usuario
            $user = User::find($request->user_id);
            $lstMenu = [];
            foreach ($lstModulos as $modulo) {
                if ($modulo->esMenu == 0) {
                    $modulo = [
                        'id' => $modulo->id,
                        'text' => "Módulo: " . $modulo->nombre,
                        'checked' => $user->tienePermiso($modulo->permisos->id),
                        'children' => null,
                    ];
                } else {
                    $modulo = [
                        'id' => $modulo->id,
                        'text' => "Menú: " . $modulo->nombre,
                        'checked' => false,
                        'children' => $this->getChildren($modulo, $user),
                    ];
                }

                $lstMenu[] = $modulo;
            }
            return $lstMenu;
        } catch (Exception $ex) {
            return response()->json([
                'lSuccess' => false,
                'cMensaje' => $ex->getMessage(),
            ]);
        }
    }

    private function getChildren($modulo, $user)
    {
        /* Si el módulo no tiene submódulo */
        if ($modulo->submodulos != null) {

            $lstModulos = array();
            foreach ($modulo->submodulos as $submodulo) {
                $mod = [
                    'id' =>  $submodulo->id,
                    'text' =>  "Módulo: " . $submodulo->nombre,
                    'checked' => false,
                    'children' => $this->getChildren($submodulo, $user),
                ];

                $lstModulos[] = $mod;
            }

            return $lstModulos;
        } else  if ($modulo->permisos != null) {
            $lstPermisos = array();
            $permiso = $modulo->permisos;
            $per = [
                'id' => $permiso->id,
                'tipo' => 'permiso',
                'text' => 'Permiso: ' . $permiso->nombre,
                'checked' => $user->tienePermiso($permiso->id),
            ];
            $lstPermisos[] = $per;

            return $lstPermisos;
        } else {
            return null;
        }
    }
}
