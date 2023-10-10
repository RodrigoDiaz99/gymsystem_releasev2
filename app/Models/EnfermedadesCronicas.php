<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnfermedadesCronicas extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "enfermedades_cronicas";
    protected $fillable = [
        'hipertension_arterial',
        'colesterol',
        'trigliceridos',
        'anemia',
        'bronquitis',
        'asma',
        'convulsiones',
        'nervio_ciatico',
        'diabetes',
        'lumbagia',
        'arritmia',
        'narcolepsia',
        'expedientes_id',

    ];
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expedientes_id');
    }
}
