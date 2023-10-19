<?php

namespace Database\Seeders;

use App\Models\Submodulos;
use Illuminate\Database\Seeder;

class SubmodulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear submódulos (los que están bajo la sección)
        Submodulos::create([
            'id_modulo' => '2',
            'nombre' => 'Cortes de caja',
            'descripcion' => 'Módulo de cortes de caja',
            'icono' => 'fas fa-cash-register',
            'tema' => 'text-danger',
            'url' => '/cortescaja/inicio'
        ]);
        Submodulos::create([
            'id_modulo' => '2',
            'nombre' => 'Estadisticas',
            'descripcion' => 'Módulo de estadisticas',
            'icono' => 'fas fa-chart-bar',
            'tema' => 'text-success',
            'url' => '/estadisticas/inicio'
        ]);
        Submodulos::create([
            'id_modulo' => '2',
            'nombre' => 'Bitácoras',
            'descripcion' => 'Módulo de bitácoras',
            'icono' => 'fas fa-file-alt',
            'tema' => 'text-primary',
            'url' => '/bitacoras/inicio'
        ]);

        Submodulos::create([
            'id_modulo' => '3',
            'nombre' => 'Membresías',
            'descripcion' => 'Módulo de membresías',
            'icono' => 'fas fa-id-card',
            'tema' => 'text-primary',
            'url' => '/membresias/inicio'
        ]);

        Submodulos::create([
            'id_modulo' => '3',
            'nombre' => 'Productos',
            'descripcion' => 'Módulo de Productos',
            'icono' => 'fas fa-shopping-bag',
            'tema' => 'text-danger',
            'url' => '/productos/inicio'
        ]);

        Submodulos::create([
            'id_modulo' => '3',
            'nombre' => 'Categorías',
            'descripcion' => 'Módulo de Categorías',
            'icono' => 'fas fa-folder-open',
            'tema' => 'text-danger',
            'url' => '/categorias/inicio'
        ]);

        Submodulos::create([
            'id_modulo' => '4',
            'nombre' => 'Usuarios',
            'descripcion' => 'Módulo de usuarios',
            'icono' => 'fas fa-user',
            'url' => '/usuarios/inicio'
        ]);

        Submodulos::create([
            'id_modulo' => '4',
            'nombre' => 'Proveedores',
            'descripcion' => 'Módulo de proveedores',
            'icono' => 'fas fa-truck-moving',
            'url' => '/proveedores/inicio'
        ]);

        Submodulos::create([
            'id_modulo' => '4',
            'nombre' => 'Expedientes',
            'descripcion' => 'Módulo de expedientes',
            'icono' => 'fas fa-notes-medical',
            'tema' => 'text-primary',
            'url' => '/expedientes/inicio'
        ]);
    }
}
