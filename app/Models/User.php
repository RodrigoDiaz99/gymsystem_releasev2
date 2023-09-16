<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function productosCreados()
    {
        return $this->hasMany(Producto::class, 'users_id');
    }

    public function role()
    {
        return $this->belongsTo(Roles::class, 'roles_id');
    }

    public function permisos()
    {
        return $this->belongsToMany(Permisos::class, 'users_has_permisos')->withPivot('id', 'deleted_at');
    }

    public function tienePermiso($permisoId)
    {
        return $this->permisos->contains('id', $permisoId);
    }

    public function tienePermisoClave($clave)
    {
        return $this->permisos->contains('clave', $clave);
    }

    public static function getPermisosCurrentUser()
    {
        $authUser = Auth::user();
        $user = User::with('permisos.modulos')->find($authUser->id);

        return $user;
    }

    public function corteCajas()
    {
        return $this->hasMany(CorteCaja::class, 'users_id');
    }
}
