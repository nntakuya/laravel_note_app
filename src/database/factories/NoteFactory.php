<?php

use App\Note;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Note::class, function (Faker $faker) {
  return [
    'title' => 'sample title',
    'content' => Str::random(20),
  ];
});

