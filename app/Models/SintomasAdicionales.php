<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SintomasAdicionales extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "sintomas_adicionales";
    protected $fillable = [
        'manchas_oscura_axilas',
        'manchas_oscura_mejillas',
        'manchas_oscura_entrepierna',
        'manchas_rosada_rostro',
        'manchas_blanca_boca',
        'manchas_oscura_cuello',
        'sintomas_cancer',
        'acne',
        'alergias',
        'migraña',

        'golpes_espalda',
        'golpes_cabeza',
        'medicamentos',
        'expedientes_id',

    ];
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expedientes_id');
    }
}
