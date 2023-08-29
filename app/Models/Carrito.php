<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrito extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "carritos";
    protected $fillable = [
        'users_id',
        'numero_venta',


    ];

}
