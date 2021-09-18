<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProdutosSeeder::class,
            UserSeeder::class,
        ]);
       factory(App\Produto::class, 100)->create();
       factory(App\User::class, 100)->create();
        
    }
}
