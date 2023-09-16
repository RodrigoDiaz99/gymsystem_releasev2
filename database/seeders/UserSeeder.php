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
            'usuario' => 'rodrigo.diaz1',
            'nombre' => 'Rodrigo Enrique',
            'apellido_paterno' => 'Diaz',
            'apellido_materno' => 'Serviran',
            'email' => 'diaz-rodrigo@hotmail.com',
            'telefono' => '9992389045',
            'fecha_nacimiento' => '1999-03-31',
            'roles_id' => '1',
            'password' => Hash::make('123456'),
        ]);


        User::create([
            'usuario' => 'kenn.ayala2',
            'nombre' => 'Kenn Enrique',
            'apellido_paterno' => 'Ayala',
            'apellido_materno' => 'Valladares',
            'email' => 'kennayala@outlook.com',
            'fecha_nacimiento' => '1998-06-04',
            'telefono' => '9992259650',
            'roles_id' => '2',
            'password' => Hash::make('123456'),
        ]);
    }
}
