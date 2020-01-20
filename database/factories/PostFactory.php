<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
   // dd($faker);
   // $title = sentence(6, true);
    return [
        'user_id'=> rand(1,30),
        'name'=> $faker->sentence(5),
        'author' => $faker->name,
        'description' => $faker->text(50)
    ];
});
