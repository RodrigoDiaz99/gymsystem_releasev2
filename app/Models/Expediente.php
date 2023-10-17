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

    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function expedienteFotos()
    {
        return $this->hasMany(ExpedienteFoto::class, 'expedientes_id');
    }
    public function habitosPsicobiologicos()
    {
        return $this->hasOne(HabitosPsicobiologicos::class, 'expedientes_id');
    }
    public function controlPeso()
    {
        return $this->hasMany(ControlPeso::class, 'expedientes_id');
    }
    public function enfermedadesCronicas()
    {
        return $this->hasMany(EnfermedadesCronicas::class, 'expedientes_id');
    }
    public function enfermedadesMentales()
    {
        return $this->hasMany(EnfermedadesMentales::class, 'expedientes_id');
    }
    public function sintomasAdicionales()
    {
        return $this->hasOne(SintomasAdicionales::class, 'expedientes_id');
    }
    public function cirugia()
    {
        return $this->hasOne(Cirugias::class, 'expedientes_id');
    }
    public function suplemento()
    {
        return $this->hasOne(Suplementos::class, 'expedientes_id');
    }
}
