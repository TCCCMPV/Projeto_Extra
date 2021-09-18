<?php

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\Hash;

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
            'id' => 1,
            'name' => 'Amoedo',
            'email' => 'lula@gmail.com',
            'password' => Hash::make('lulinha2022'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
