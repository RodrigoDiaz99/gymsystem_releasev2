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
    public function modulo()
    {
        return $this->belongsTo(Modulos::class, 'id_modulo');
    }

    public function submodulo()
    {
        return $this->belongsTo(Submodulos::class, 'id_submodulo');
    }




}
