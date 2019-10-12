<?php

/** @var Factory $factory */

use App\Enums\Product;
use App\Models\Review;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'content' => $faker->text(4096),
        'product' => $faker->randomElement(Product::ALL)
    ];
});
