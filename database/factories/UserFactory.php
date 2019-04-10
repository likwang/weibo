<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {

	$date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'activated' => 1,
        'password' => '$2y$10$WVYaDb4aXAtwtYgU48ck/.GsB4bF13AAPr91l1TWBtgQ83sPeskfu', // secret
        'remember_token' => Str::random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
