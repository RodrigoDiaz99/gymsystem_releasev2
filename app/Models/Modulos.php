<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    use HasFactory;

    public function permisos()
    {
        return $this->hasOne(Permisos::class, 'id_modulo');
    }

    public function submodulos()
    {
        return $this->hasMany(Submodulos::class, 'id_modulo');
    }
}
