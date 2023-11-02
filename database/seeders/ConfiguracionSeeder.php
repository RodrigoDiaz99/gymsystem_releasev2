<?php

namespace Database\Seeders;

use App\Models\Configuracion;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Super-Admin  administrador maestro*/
        Configuracion::create([
            'cClave' => 'numero_orden',
            'cValor' => 1,
            'Descripcion' => 'Número de orden del día',
        ]);

    }
}
