<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Appinstall::class, function (Faker $faker) {
    return [
        // 'name' => $faker->name,
        'install_time' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'android_num' => $faker->numberBetween($min = 0, $max = 200),
        'ios_num' => $faker->numberBetween($min = 0, $max = 200),
    ];
});
