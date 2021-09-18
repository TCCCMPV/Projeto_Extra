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
            'nome' => 'Kit 10 canetas',
            'foto'=> 'https://a-static.mlcdn.com.br/618x463/caneta-escolar-kit-10-canetas-coloridas-esferografica-bic/bamboletoy4/5642230366/87fd4ce823de54ce2ce97107a9046bf4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
            'description' => '10 canetas de cores selecionas escolha 10 números de 1 a 50 e envie ao vendedor',
        ]);
        DB::table('produtos')->insert([
            'valor' => 100.5,
            'nome' => 'tablet multilaser',
            'foto' => 'https://a-static.mlcdn.com.br/618x463/tablet-multilaser-m7s-go-7-wi-fi-16gb-android-8-1-quad-core/magazineluiza/224437500/fd356065bb13520670bdb5f94b2e4110.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
            'description' => 'Bem baratinho e talvez pode ser que ninguém consiga rodar',
        ]);
    }
}
