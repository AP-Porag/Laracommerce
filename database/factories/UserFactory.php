<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use App\Models\Stock;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

//$factory->define(User::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => Str::random(10),
//    ];
//});

//seeding product
$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween($min = 1, $max = 8),
        'sub_category_id' => $faker->numberBetween($min = 1, $max = 42),
        'name' => $faker->unique()->name,
        'slug' => 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum', // slug-should be changed
        'summary' => $faker->text($maxNbChars = 100) ,
        'description' => $faker->text($maxNbChars = 200),
        'thumbnail' => $faker->imageUrl($width = 1000, $height = 350),
        'unit_id' => $faker->numberBetween($min = 1, $max = 5),
        'price' => $faker->numberBetween($min = 50, $max = 500),
    ];
});

//seeding Stock
$factory->define(Stock::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 200),
        'color_id' => $faker->numberBetween($min = 1, $max = 20),
        'size_id' => $faker->numberBetween($min = 1, $max = 6),
        'quantity' => $faker->numberBetween($min = 10, $max = 100), // slug-should be changed
    ];
});
