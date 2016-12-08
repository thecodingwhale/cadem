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

$factory->define(App\Registration::class, function (Faker\Generator $faker) {
    return [];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'main_account' => false,
        'main_account' => false
    ];
});

$factory->define(App\School::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name
    ];
});

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Bachelor of Science in Computer Science',
        'code' => 'BSCS'
    ];
});

$factory->define(App\Subject::class, function (Faker\Generator $faker) {
    return [
        'name' => 'College Algebra',
        'code' => 'Math 1',
        'units' => 3,
        'hours' => 0
    ];
});

$factory->define(App\Curriculum::class, function (Faker\Generator $faker) {
    return [
        'year_level' => 1,
        'semester' => 1
    ];
});


$factory->define(App\Enrollment::class, function (Faker\Generator $faker) {
    return [
        'semester' => 1,
        'school_year_from' => 2016,
        'school_year_to' => 2017
    ];
});

$factory->define(App\EnrollmentCourse::class, function (Faker\Generator $faker) {
    return [

    ];
});

$factory->define(App\EnrollmentCourseSection::class, function (Faker\Generator $faker) {
    return [

    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [

    ];
});