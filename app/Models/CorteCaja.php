<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorteCaja extends Model
{
    use HasFactory;
    protected $table = "corte_cajas";
    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
