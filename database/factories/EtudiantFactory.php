<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'email' => $faker->email ,
        'password' => $faker->password ,
        'nom' => $faker->lastName ,
        'prenom' => $faker-> firstName ,
        'niveau' => $faker->lexify('???') ,
        'section' => $faker->lexify('?') ,
        'groupe' => $faker->randomDigitNotNull ,
        'specialite' => $faker->lexify('???') ,
        'date_naissance' => $faker->date() ,
        'adresse' => $faker->address ,
        'indicateur_promo' => $faker->lexify('?')
    ];
});
