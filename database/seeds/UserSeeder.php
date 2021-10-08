<?php

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Facundo',
            'lastname' => 'Avendaño',
            'documento' => '39162562',
            'email'    => 'facundo.avendano77@gmail.com',
            'password' => bcrypt('abcd1234')
        ])->assignRole('Admin');

        User::create([
            'name'     => 'Martin',
            'lastname' => 'Brito',
            'documento' => '40273673',
            'email'    => 'martin.brito88@gmail.com',
            'password' => bcrypt('abcd1234')
        ])->assignRole('Alumno');
    }
}
