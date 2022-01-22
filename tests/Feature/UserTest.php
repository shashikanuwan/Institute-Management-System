<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_fetch_all_students()
    {
        $user = User::factory(10)->create();

        $response = $this->getJson(route('student.index'));

        $this->assertEquals(5, count($response->json()));
        $this->assertEquals($user->first_name, $response->json()[0][$user->first_name]);
    }
}
