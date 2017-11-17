<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'mobile' => $faker->unique()->phoneNumber,
        'password' => $password ?: $password = bcrypt('bienvenue'),
        'type_user_id' => $faker->numberBetween(2,3),
        'verified' => $faker->numberBetween(0,1),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Annonce::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->firstName.' '.$faker->lastName,
        'situation' => $faker->streetName,
        'description' => $faker->paragraph(3),
        'strong_point' => $faker->word.','.$faker->word.','.$faker->word.','.$faker->word.','.$faker->word.','.$faker->word.','.$faker->word,
        'city' => $faker->city,
        'mobile' => $faker->unique()->phoneNumber,
        'fixe' => $faker->unique()->phoneNumber,
        'email' => $faker->unique()->companyEmail,
        'categorie_id' => $faker->numberBetween(1,3),
        'promoted' => 0,
        'verified' => $faker->numberBetween(0,1),
        'statut' => $faker->numberBetween(0,1),
        'user_id' => $faker->randomElement([12,10,11,14,40,41,43,45,47,49,13,15,17,19,21,42,44,46,48]),
    ];
});


$factory->define(App\Image::class, function (Faker\Generator $faker) {

    $annonces = \App\Annonce::OrderBy('id', 'desc')->get();

    foreach ($annonces as $annonce) {
        for ($i=0; $i<4; $i++){
            return [
                'name' => $faker->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg','19.jpg','20.jpg','21.jpg',]),
                'annonce_id' => $annonce->id,
            ];
        }
    }

});
