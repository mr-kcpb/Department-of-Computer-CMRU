<?php

use Faker\Generator as Faker;

$factory->define(App\Models\AnnouncePage::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title'   => $faker->text(100),
        'detail'  => $faker->text(300),
    ];
});
