<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Mikewazovzky\Demo\Models\Item::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});
