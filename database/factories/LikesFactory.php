<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coocoo;
use App\User;
use App\Like;
use Faker\Generator as Faker;


$factory->define(Like::class, function (Faker $faker) {
    return [
        //
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'coocoo_id' => function () {
            return factory(Coocoo::class)->create()->id;
        },
    ];
});
