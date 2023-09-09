<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    use HasFactory;

    public function submodulos()
    {
        return $this->hasMany(Modulos::class, 'modulo_padre');
    }
}
