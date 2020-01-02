<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EtudiantTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_create_etudiant() {
        $data = [
            'email' => $this->faker->email ,
            'password' => $this->faker->password ,
            'nom' => $this->faker->lastName ,
            'prenom' => $this->faker-> firstName ,
            'niveau' => $this->faker->lexify('???') ,
            'section' => $this->faker->lexify('?') ,
            'groupe' => $this->faker->randomDigitNotNull ,
            'specialite' => $this->faker->lexify('???') ,
            'date_naissance' => $this->faker->date() ,
            'adresse' => $this->faker->address ,
            'indicateur_promo' => $this->faker->lexify('?')
        ];
        $this->post(route('etudiants.store'), $data)
             ->assertStatus(201)
             ->assertJson($data);
    }
}
