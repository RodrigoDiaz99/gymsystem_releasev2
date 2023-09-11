<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriaProductos extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "categoria_productos";
    protected $fillable = [
        'nombre_categoria',



    ];
    public function productos()
{
    return $this->hasMany(Producto::class, 'categoria_productos_id');
}
}
