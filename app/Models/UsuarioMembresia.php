<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioMembresia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "usuario_membresias";
    protected $fillable = [
        'users_id',
        'fecha_inicio',
        'carritos_id',
        'fecha_expiracion',
        'tipo_membresias_id',

    ];
}
