<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Super-Admin  administrador maestro*/
        Roles::create([
            'nombre' => 'Administrador',
            'descripcion' => 'Rol de administrador del sistema. Este rol no tiene límites de acceso a los módulos.',
            'orden' => '1'
        ]);

        Roles::create([
            'nombre' => 'Empleado',
            'descripcion' => 'Rol de empleado.',
            'orden' => '2'
        ]);
    }
}
