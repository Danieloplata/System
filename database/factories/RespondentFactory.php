<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Respondent::class, function (Faker $faker) {
    return [
        'panel_id' => function () {
    		return factory('App\Panel')->create()->id;
    	},
        'country_id' => $faker->numberBetween($min = 1, $max = 245),
        'respondentID' => $faker->swiftBicNumber,
        'ipAddress' => $faker->ipv4,
        'userAgent' => $faker->userAgent,
        'status' => $faker->randomElement($array = array ('complete','quotafull','incomplete','screenout')),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->addMinutes(rand(1,20))->addSeconds(rand(1,59))->format('Y-m-d H:i:s')
    ];
});
