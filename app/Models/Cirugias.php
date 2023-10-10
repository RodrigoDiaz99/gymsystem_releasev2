<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cirugias extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "cirugias";
    protected $fillable = [
        'cesarea',
        'fecha_cesarea',
        'extirpacion_matriz',
        'fecha_extirpacion',
        'embarazo',
        'fecha_embarazo',
        'numero_embarazos',
        'abortos',
        'fecha_aborto',
        'extirpacion_apendice',
        'fecha_extirpacion_apendice',
        'extirpacion_vesicula',
        'fecha_extirpacion_vesicula',
        'hernias',
        'fecha_hernias',
        'extirpacion_senos',
        'fecha_extirpacion_senos',
        'piedras_riñon',
        'fecha_piedras_riñon',
        'otro',
        'explicacion_otro',
        'expedientes_id',

    ];
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expedientes_id');
    }
}
