<?php

namespace Database\Seeders;

use App\Models\Modulos;
use Illuminate\Database\Seeder;

class ModulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Para crear uno sin menú
        Modulos::create([
            'nombre' => 'Inicio',
            'descripcion' => 'Inicio del sistema',
            'icono' => 'fas fa-home',
            'esMenu' => 0,
            'url' => '/inicio'
        ]);

        // Crear menús
        Modulos::create([
            'nombre' => 'Información',
            'descripcion' => 'Sección de información',
            'icono' => null,
            'esMenu' => 1,
            'url' => '/'
        ]);

        Modulos::create([
            'nombre' => 'Productos',
            'descripcion' => 'Sección de productos',
            'icono' => null,
            'esMenu' => 1,
            'url' => '/'
        ]);

        Modulos::create([
            'nombre' => 'Usuarios',
            'descripcion' => 'Sección de Usuarios',
            'icono' => null,
            'esMenu' => 1,
            'url' => '/'
        ]);
    }
}
