<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Product::class, function(Faker\Generator $faker){
    return[
        'name'=> $faker->sentence(2),
        'description'=> $faker->sentence(10),
        'price_cost'=> $faker->numberBetween(1,50),
        'price_resale'=> $faker->numberBetween(2,100),
        'category_id'=> 1,
        //'brand_id'=> 1,
        //'provider_id'=> 1,
        
    ];
});