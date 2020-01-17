<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
   
    return [
        'id' => Str::uuid(),
        'created_by' => function () {
            return factory(App\User::class)->create()->id;
        }, 
        'published_by' => function () {
            return factory(App\User::class)->create()->id;
        },
        'title'=> $faker->word,
        'text' => $faker->paragraph,
        'image'=> $faker->image('public/storage/images',640,480, null, false)
    ];
});
