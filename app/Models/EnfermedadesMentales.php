<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnfermedadesMentales extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "enfermedades_mentales";
    protected $fillable = [
        'ansiedad',
        'anorexia',
        'bulimia',
        'obesidad',
        'epilepsia',
        'depresion',
        'depresion_postparto',
        'estres_cronico',
        'estres_postraumatico',
        'fobias',
        'expedientes_id',

    ];
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expedientes_id');
    }
}
