<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Useinfo::class, function (Faker $faker) {
    return [
        // 'name' => $faker->name,
        'user_name' => $faker->userName,
        'user_gender' => 0,
        'user_age' => $faker->numberBetween($min = 1, $max = 80) ,
        'photo' => $faker->url,
        'password' => $faker->password,
        'token' => $faker->text,
    ];
});
