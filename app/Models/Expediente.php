<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expediente extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "expedientes";
    protected $fillable = [
        'date_interview',
        'desmayos',
        'mareos',
        'perdida_conocimiento',
        'hospitalizacion',
        'causa_hospitalizacion',
        'fecha_hospitalizacion',
        'medicamentos',
        'numero_control',
        'users_id',

    ];
}
