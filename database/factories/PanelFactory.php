<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Panel::class, function (Faker $faker) {
    return [
        'project_id' => function () {
    		return factory('App\Project')->create()->id;
    	},
        'user_id' => function () {
    		return factory('App\User')->create()->id;
    	},
        'panelName' => $faker->text($maxNbChars = 50),
        'redirectLink' => 'https://' . $faker->domainName . '/survey/',
        'status' => 'LIVE',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
