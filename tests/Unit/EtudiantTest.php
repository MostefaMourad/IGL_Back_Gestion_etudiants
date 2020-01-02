<?php

namespace Tests\Unit;

use App\Etudiant;
use Tests\TestCase;
use App\Helpers \APIHelpers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

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
        $response = APIHelpers::createAPIResponse(false, 201, 'Ajout avec succes',$data);
        $this->post(route('etudiants.store'), $data)
        ->assertStatus(201)
        ->assertJson($response);
    } 

    public function test_can_update_etudiant() {
        $etudiant = factory(Etudiant::class)->create();
        $data = [
            'id' => $etudiant->id ,
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
            'indicateur_promo' => $this->faker->lexify('?') ,
            'created_at' => $etudiant->created_at ,
            'updated_at' => $etudiant->updated_at 
        ];
        $response = APIHelpers::createAPIResponse(false, 200, 'Modification avec succes', $data); 
        $this->patch(route('etudiants.update', $etudiant->id), $data)
            ->assertStatus(200)
            ->assertJson($response);
    }

    public function test_can_show_etudiant() {
        $etudiant = factory(Etudiant::class)->create();
        $this->get(route('etudiants.show', $etudiant->id))
            ->assertStatus(200);
    }

    public function test_can_delete_etudiant() {
        $etudiant = factory(Etudiant::class)->create();
        $this->delete(route('etudiants.delete', $etudiant->id))
            ->assertStatus(204);
    }

    public function test_can_list_etudiant() {
        $etudiants = factory(Etudiant::class, 2)->create()->map(function ($etudiant) {
            return $etudiant->only(['id', 'email', 'password','nom','prenom','niveau','section','groupe','specialite','date_naissance','indicateur_promo','created_at','updated_at']);
        });
        $response = APIHelpers::createAPIResponse(false, 200, '', $etudiants->toArray());
        $this->get(route('etudiants'))
            ->assertStatus(200)
            ->assertJson($response);
    }

}
