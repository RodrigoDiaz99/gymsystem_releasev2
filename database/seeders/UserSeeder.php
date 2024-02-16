<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Super-Admin  administrador maestro*/
        User::create([
            'usuario' => 'rodrigo.diaz',
            'nombre' => 'Rodrigo Enrique',
            'apellido_paterno' => 'Diaz',
            'apellido_materno' => 'Serviran',
            'email' => 'diaz-rodrigo@hotmail.com',
            'cliente' => '1',
            'telefono' => '9992389045',
            'fecha_nacimiento' => '1999-03-31',
            'roles_id' => '1',
            'password' => Hash::make('123456'),
        ]);


        User::create([
            'usuario' => 'kenn.ayala',
            'nombre' => 'Kenn Enrique',
            'apellido_paterno' => 'Ayala',
            'apellido_materno' => 'Valladares',
            'email' => 'kennayala@outlook.com',
            'fecha_nacimiento' => '1998-06-04',
            'cliente' => '1',
            'telefono' => '9992259650',
            'roles_id' => '2',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'usuario' => 'cosme.magana',
            'nombre' => 'Cosme Alberto',
            'apellido_paterno' => 'Magaña',
            'apellido_materno' => 'Cámara',
            'email' => 'cosme.maganac@outlook.com',
            'fecha_nacimiento' => '1998-06-04',
            'cliente' => '1',
            'telefono' => '9990001110',
            'roles_id' => '3',
            'password' => Hash::make('123456'),
        ]);
    }
}
