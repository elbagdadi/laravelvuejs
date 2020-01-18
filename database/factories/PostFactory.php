<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
   
    return [
        'id' => Str::uuid(),
        'cat_id' => function () {
            return factory(App\Category::class)->create()->id;
        }, 
        'created_by' => function () {
            return factory(App\User::class)->create()->id;
        }, 
        'published_by' => function () {
            return factory(App\User::class)->create()->id;
        },
        'title'=> $faker->title,
        'text' => $faker->text,
        'image'=> $faker->image('public/storage/images',900,300, null, false)
    ];
});
