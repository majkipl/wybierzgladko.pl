<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => '+48' . $faker->numberBetween('123456789', '999999999'),
        'address' => $faker->streetAddress,
        'address_nb' => $faker->streetSuffix,
        'city' => $faker->city,
        'zip' => $faker->numberBetween(10, 99) . '-' . $faker->numberBetween(100, 999),
        'img_receipt' => 'receipts/z8cQ1QnxrY6BlXkKZeTNN5WFzciIzVuRFDmfWEvu.jpg',
        'iban' => $faker->numerify('##########################'),
        'reason' => $faker->text(4000),
        'legal_1' => true,
        'legal_2' => true,
        'legal_3' => true,
        'legal_4' => $faker->numberBetween(0, 1),
    ];
});
