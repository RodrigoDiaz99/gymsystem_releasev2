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
        Modulos::create([
            'nombre' => 'Rodrigo Enrique',
            'apellido_paterno'=>'Diaz',
            'apellido_materno'=>'Serviran',
            'email' => 'diaz-rodrigo@hotmail.com',
            'telefono' => '9992389045',
            'roles_id' => '1',
            'password' => Hash::make('123456'),
        ]);    }
}
