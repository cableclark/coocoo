<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coocoo;
use App\User;
use Faker\Generator as Faker;

$factory->define(Coocoo::class, function (Faker $faker) {
    return [
        //
        'coocoo' => $faker->paragraph,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
