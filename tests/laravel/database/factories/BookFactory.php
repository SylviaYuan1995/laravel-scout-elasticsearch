<?php

declare(strict_types=1);

use App\BookWithCustomKey;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'custom_key' => $faker->uuid,
        'title' => $faker->sentence,
        'author' => $faker->name,
        'year' => $faker->year,
    ];
});

$factory->state(Book::class, 'new-york', function (Faker $faker) {
    return [
        'title' => "{$faker->sentence} New-York {$faker->sentence}",
    ];
});

$factory->state(Book::class, 'barcelona', function (Faker $faker) {
    return [
        'title' => "{$faker->sentence} Barcelona {$faker->sentence}",
    ];
});

$factory->define(BookWithCustomKey::class, function (Faker $faker) {
    return [
        'custom_key' => $faker->uuid,
        'title' => $faker->sentence,
        'author' => $faker->name,
        'year' => $faker->year,
    ];
});

$factory->state(BookWithCustomKey::class, 'new-york', function (Faker $faker) {
    return [
        'title' => "{$faker->sentence} New-York {$faker->sentence}",
    ];
});

$factory->state(BookWithCustomKey::class, 'barcelona', function (Faker $faker) {
    return [
        'title' => "{$faker->sentence} Barcelona {$faker->sentence}",
    ];
});
