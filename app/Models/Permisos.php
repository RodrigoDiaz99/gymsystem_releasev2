<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    use HasFactory;
    protected $table = "permisos";

    protected $cast = [
        'esPadre' => 'boolean'
    ];
    public function modulos()
    {
        return $this->belongsTo(Modulos::class, 'modulo_id');
    }


}
