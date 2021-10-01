<?php

use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name'     => 'Facundo',
            'lastname' => 'Avendaño',
            'documento' => '39162562',
            'email'    => 'facundo.avendano77@gmail.com',
            'password' => bcrypt('abcd1234')
        ]);
    }
}
