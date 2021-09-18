<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'valor' => 10.00,
            'Nome' => 'Kit 10 canetas',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
            'description' => '10 canetas de cores selecionas escolha 10 números de 1 a 50 e envie ao vendedor',
        ]);
        DB::table('produtos')->insert([
            'valor' => 100.5,
            'Nome' => 'Tablet Multilaser',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
            'description' => 'Bem baratinho e talvez pode ser que ninguém consiga rodar',
        ]);
    }
}
