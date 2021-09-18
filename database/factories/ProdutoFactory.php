<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use app\Produto;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
            'valor' => $faker->randomFloat(null, 0.99, 5000),
            'Nome' => $faker->ean13,
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
            'description' => $faker->text,
    ];
});
