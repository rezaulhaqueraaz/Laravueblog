<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
            'title'=>$faker->realText(100),
            'content'=>$faker->realText(1000),
            'position'=>$faker->numberBetween(2,4),
            'user_id'=>$faker->numberBetween(1,3),
            'category_id'=>$faker->numberBetween(1,2),
            'image'=>'public/storage/post/'.$faker->numberBetween(1,7).'.jpg',
    ];
});
