<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HabitosPsicobiologicos extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = "habitos_psicobiologicos";
    protected $fillable = [
        'numero_comidas',
        'ayunos',
        'horas_ayuno',
        'sueño',
        'micciones_dia',
        'micciones_noche',
        'evacuaciones',
        'tabaco',
        'alcohol',
        'expedientes_id',

    ];
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expedientes_id');
    }
}
