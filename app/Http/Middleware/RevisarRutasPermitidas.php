<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevisarRutasPermitidas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $authUser = Auth::user();
        $user = User::with('permisos.modulo', 'permisos.submodulo', 'role')->find($authUser->id);
        if ($user->role->id == 1) {
            return $next($request);
        } else {
            $rutasPermitidas = [];

            foreach ($user->permisos as $permiso) {
                if ($permiso->modulo) {
                    $rutasPermitidas[] =  '/' . explode('/', $permiso->modulo->url)[1];
                } elseif ($permiso->submodulo) {
                    $rutasPermitidas[] =  '/' . explode('/', $permiso->submodulo->url)[1];
                }
            }

            $rutasPermitidas = array_unique($rutasPermitidas);

            $rutaActual = '/' . explode('/', $request->getRequestUri())[1];
            // Verifica si la URI actual está en la lista de rutas permitidas
            if (!in_array($rutaActual, $rutasPermitidas)) {
                // Si la URI no está permitida, redirige al usuario a la página 403
                return abort(403);
            } else {
                return $next($request);
            }
        }
    }
}
