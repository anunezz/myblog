<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoleUser;
use Faker\Generator as Faker;

$factory->define(RoleUser::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,30),
        'role_id' => rand(1,3)
    ];
});
