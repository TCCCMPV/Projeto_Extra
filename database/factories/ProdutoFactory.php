<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use app\Produto;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
            'valor' => $faker->randomFloat(null, 0.99, 5000),
            'Nome' => $faker->ean13,
            'foto' => $faker->imageUrl,
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => $faker->numberBetween(1,100),
            'description' => $faker->text,
    ];
});
