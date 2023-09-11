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
            'nombre' => 'Rodrigo Enrique',
            'apellido_paterno'=>'Diaz',
            'apellido_materno'=>'Serviran',
            'email' => 'diaz-rodrigo@hotmail.com',
            'telefono' => '9992389045',
            'roles_id' => '1',
            'password' => Hash::make('123456'),
        ]);


        User::create([
            'nombre' => 'Kenn Enrique',
            'apellido_paterno'=>'Ayala',
            'apellido_materno'=>'Valladares',
            'email' => 'kennayala@outlook.com',
            'telefono' => '9992259650',
            'roles_id' => '2',
            'password' => Hash::make('123456'),
        ]);








    }
}
