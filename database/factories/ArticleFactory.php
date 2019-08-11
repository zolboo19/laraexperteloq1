<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use App\User;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'article_text' => $faker->text(500),
        //'user_id' => null,
        //'user_id' => rand(1, 50),
        //'user_id' => User::first()->id,
        //'user_id' => User::inRandomOrder()->first()->id,
        //'user_id' => factory(User::class)->create()->id,
    ];
});
