<?php

use App\People;
use Faker\Generator as Faker;


/*$faker = Faker::create();
$people = People::all()->pluck('id')->toArray();*/

$factory->define(App\Article::class, function (Faker $faker) {

    $author_ids = \DB::table('people')->select('id')->get();
    $author_id = $faker->randomElement($author_ids)->id;

    return [
        //'author_id' => $faker->numberBetween(0,30),
        'author_id' => $author_id,
        'title' => $faker->sentence(2)
    ];
});
