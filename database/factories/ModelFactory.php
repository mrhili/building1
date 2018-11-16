<?php
// require the Faker autoloader
require_once 'vendor/fzaninotto/faker/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'admin' => $faker->numberBetween($min = 0, $max = 1),
        'tel' => $faker->e164PhoneNumber,
    ];
});


$factory->define(App\Building::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_id' => 1,
        'name' => $faker->name,
        'price' => $faker->numberBetween($min = 0, $max = 9000),
        'thing_id' => 1,
        'car_id' => 6,
        'carModel' => 0,
        'carCarb' => 0,
        'area_id' => 20,
        'rent' => $faker->numberBetween($min = 0, $max = 7),
        'largDisc' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'lang' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
        'lat' => $faker->randomFloat($nbMaxDecimals = NULL, $min = -10, $max = 10),
        'tel' => $faker->e164PhoneNumber ,
        'thingKind' => 0,
        'status' => 1,
        'created_at' => date('Y-m-d H:i:s'),

    ];
});


$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->email ,
        'phoneNumber' => $faker->e164PhoneNumber,
        'subject' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'message' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'view' => 0,
        'type' => $faker->numberBetween($min = 0, $max = 3),
        'reply' => 0,
        'deleted' => 0,
        'created_at' => date('Y-m-d H:i:s'),
    ];
});

$factory->define(App\Reply::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'contact_id' => 1,
        'email' => $faker->email,
        'subject' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'message' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),

        'confirmed' => 0,
        'deleted' => 0,
        'user_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
    ];
});


$factory->define(App\Car::class, function (Faker\Generator $faker) {
    static $password;

    return [

        'parent_id' => 0,
        'name' => 'none',
        'slug' => 'none',
    ];
});


$factory->define(App\Area::class, function (Faker\Generator $faker) {
    static $password;

    return [

        'parent_id' => 0,
        'name' => 'none',
        'slug' => 'none',
    ];
});

$factory->define(App\Thing::class, function (Faker\Generator $faker) {
    static $password;

    return [

        'parent_id' => 0,
        'name' => 'none',
        'slug' => 'none',
    ];
});

