<?php

use Faker\Generator as Faker;

$factory->define(App\Provider::class, function (Faker $faker) {
    return [
        'providerName' => $faker->text($maxNbChars = 50),
		'completeLink' => $faker->url,
		'quotaFullLink' => $faker->url,
		'screenoutLink' => $faker->url,
    ];
});
