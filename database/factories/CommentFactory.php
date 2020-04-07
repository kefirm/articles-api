<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {

    $author_ids = \DB::table('people')->select('id')->get();
    $author_id = $faker->randomElement($author_ids)->id;

    $article_ids = \DB::table('articles')->select('id')->get();
    $article_id = $faker->randomElement($article_ids)->id;
    return [
        'article_id' => $article_id,
        'author_id' => $author_id,
        'body' => $faker->paragraph(10)
    ];
});
