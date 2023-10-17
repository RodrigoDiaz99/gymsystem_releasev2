<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suplementos extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = "suplementos";
    protected $fillable = [
        'creatina',
        'proteina',
        'hmb',
        'testrol',
        'bnox',
        'betalanina',
        'animal_pak',
        'lcarnitina',
        'cla',
        'taurina',
        'colageno',
        'aminoacidos',
        'bca',
        'glutamina',
        'leucina',
        'itravil',
        'redotex',
        'acxion',
        'te_divina',
        'piñalim',
        'herbalife',
        'omnilife',

        'cromasol',
        'farmasi',
        'otros',
        'expedientes_id',

    ];
    public function expediente()
    {
        return $this->belongsTo(Expediente::class, 'expedientes_id');
    }
}
