<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use App\Coocoo;
use App\User;

    $factory->define(Comment::class, function (Faker $faker) {
        return [
            //
            'comment' => $faker->paragraph,
            'author' => function () {
                return factory(User::class)->create()->id;
            },
            'coocoo' => function () {
                return factory(Coocoo::class)->create()->id;
            },
        ];
    });

