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

$factory->define(Seia\Core\Model\User::class, function(Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Seia\Core\Model\UserMeta::class, function(Faker\Generator $faker) {
    return [
        'created_by' => 1,
        'field_name' => 'birth_date',
        'field_type' => 'date',
        'date_value' => $faker->date(),
    ];
});

$factory->define(Seia\Core\Model\Group::class, function(Faker\Generator $faker)
{
    $name = $faker->name;
    $slug = str_slug($name);
    return [
        'created_by' => 1,
        'name' => $name,
        'slug' => $slug,
    ];
});
