<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedores extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "proveedores";
    protected $fillable = [
        'nombre_proveedor',
        'numero_telefono',
        'rfc',
    ];
    public function productos()
    {
        return $this->hasMany(Producto::class, 'proveedores_id');
    }
}
