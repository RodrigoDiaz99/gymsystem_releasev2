<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submodulos extends Model
{
    use HasFactory;

    public function permisos()
    {
        return $this->hasMany(Permisos::class, 'id_submodulo');
    }

    public function modulo()
    {
        return $this->belongsTo(Modulos::class, 'id_modulo');
    }
}
