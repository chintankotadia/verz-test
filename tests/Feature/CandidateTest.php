<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Factory as Faker;
use App\Models\Candidate;

class CandidateTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Method for testing list of the candidates
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/candidate');

        $response->assertStatus(200);
        $response->assertViewHas('candidates');
    }

    /**
     * Method for testing create candidate route
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->get('/candidate/create');

        $response->assertStatus(200);
    }

    /**
     * Method for storing value of candidate
     *
     * @return void
     */
    public function testStore()
    {
        $faker = Faker::create();

        $data = [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'address' => $faker->streetAddress,
            'city' => $faker->city,
            'postal' => $faker->postcode
        ];

        $response = $this->call('POST', '/candidate', $data);
        $response->assertSessionHas('success');
        $response->assertStatus(302);
        $response->assertRedirect('/candidate');
    }

    /**
     * Method for testing edit candidate route
     *
     * @return void
     */
    public function testEdit()
    {
        $faker = Faker::create();
        $candidateId = $faker->unique()->numberBetween(1, Candidate::count());

        $response = $this->get('/candidate/' . $candidateId . '/edit');
        $response->assertViewHas('candidate');
        $response->assertStatus(200);
    }

    /**
     * Method for testing update candidate route
     *
     * @return void
     */
    public function testUpdate()
    {
        $faker = Faker::create();
        $candidateId = $faker->unique()->numberBetween(1, Candidate::count());

        $data = [
            'first_name' => $faker->firstName
        ];

        $response = $this->call('PUT', '/candidate/' . $candidateId, $data);
        $response->assertStatus(302);
        $response->assertSessionMissing('error');
    }

    /**
     * Method for testing delete candidate route
     *
     * @return void
     */
    public function testDelete()
    {
        $faker = Faker::create();
        $candidateId = $faker->unique()->numberBetween(1, Candidate::count());
        
        $response = $this->call('DELETE', '/candidate/' . $candidateId);
        $response->assertSessionHas('success');
        $response->assertStatus(302);
    }
}
