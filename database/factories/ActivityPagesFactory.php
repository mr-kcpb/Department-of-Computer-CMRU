<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ActivityPage::class, function (Faker $faker) {
    return [
        'user_id'     => 1,
        'cover_image' => $faker->image($dir = storage_path('app/public'),
            $width = 640,
            $height = 480,
            'abstract',
            false),
        'title'       => $faker->text(100),
        'detail'      => $faker->text(300),
    ];
});
