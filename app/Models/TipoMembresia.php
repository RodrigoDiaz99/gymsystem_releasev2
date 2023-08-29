<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoMembresia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "tipo_membresias";
    protected $fillable = [
        'nombre_membresia',
        'precio',
        'descripcion_membresia',
        'dias_membresia',
           ];
}
