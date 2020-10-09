<?php

/** @var Factory $factory */

use App\Models\Application;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => '+48' . $faker->numerify('#########'),
        'img_receipt' => 'receipts/z8cQ1QnxrY6BlXkKZeTNN5WFzciIzVuRFDmfWEvu.jpg',
        'iban' => $faker->numerify('##########################'),
        'reason' => $faker->text(4000),
        'legal_1' => true,
        'legal_3' => true,
        'legal_4' => $faker->numberBetween(0, 1),
    ];
});
