<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpedienteFoto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "expediente_fotos";
    protected $fillable = [
        'ruta',
        'expedientes_id',


    ];
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expedientes_id');
    }
}
