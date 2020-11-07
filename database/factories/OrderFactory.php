<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;



$factory->define(Order::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'item_count' => rand(1,10),
    ];
});