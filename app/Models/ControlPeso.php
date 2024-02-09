<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ControlPeso extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "control_pesos";
    protected $fillable = [
        'fecha_visita',
        'talla_ropa',
        'altura',
        'peso',
        'cuello',
        'busto',
        'cintura',
        'cadera',
        'brazo_der',
        'brazo_izq',

        'pierna_der',
        'pierna_izq',
        'observaciones',
        'alimentos_no_agradables',
        'alergia_alimentos',
        'expedientes_id',

    ];
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expedientes_id');
    }
}
