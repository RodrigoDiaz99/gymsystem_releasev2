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
            'password' => Hash::make('123456'),
        ]);








    }
}
