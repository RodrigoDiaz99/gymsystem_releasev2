<?php

namespace Database\Seeders;

use App\Models\Permisos;
use Illuminate\Database\Seeder;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '1',
            'nombre' => 'Permiso de acceso al módulo de membresías',
            'clave' => 'MOD_MEMBRESIAS',
        ]);

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '2',
            'nombre' => 'Permiso de acceso al módulo de Productos',
            'clave' => 'MOD_PRODUCTO',
        ]);

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '3',
            'nombre' => 'Permiso de acceso al módulo de categorías',
            'clave' => 'MOD_CATEGORIAS',
        ]);

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '4',
            'nombre' => 'Permiso de acceso al módulo de usuarios',
            'clave' => 'MOD_USUARIOS',
        ]);

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '5',
            'nombre' => 'Permiso de acceso al módulo de productos',
            'clave' => 'MOD_PRODUCTOS',
        ]);

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '6',
            'nombre' => 'Permiso de acceso al módulo de categorías',
            'clave' => 'MOD_CATEGORIAS',
        ]);

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '7',
            'nombre' => 'Permiso de acceso al módulo de usuarios',
            'clave' => 'MOD_USUARIOS',
        ]);

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '8',
            'nombre' => 'Permiso de acceso al módulo de proveedores',
            'clave' => 'MOD_PROVEEDORES',
        ]);

        Permisos::create([
            'id_modulo' => null,
            'id_submodulo' => '9',
            'nombre' => 'Permiso de acceso al módulo de expedientes',
            'clave' => 'MOD_EXPEDIENTES',
        ]);
    }
}
