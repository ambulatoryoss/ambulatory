<?php

use Faker\Generator as Faker;
use Reliqui\Ambulatory\Booking;
use Reliqui\Ambulatory\Schedule;
use Reliqui\Ambulatory\MedicalForm;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Booking::class, function (Faker $faker) {
    // always set date to Monday next week
    $date = today()->parse('Monday next week');

    return [
        'preferred_date_time' => $date->setTime(10, 00)->toDateTimeString(),
        'description' => $faker->sentence(3),
        'schedule_id' => factory(Schedule::class),
        'medical_form_id' => factory(MedicalForm::class),
    ];
});
