<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
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
}
