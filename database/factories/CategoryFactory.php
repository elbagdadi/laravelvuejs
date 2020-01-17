<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'id' => Str::uuid(),
        'title'=> $faker->word,
        'description' => $faker->paragraph  
    ];
});
