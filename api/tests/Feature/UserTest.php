<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Passport\Passport;
use App\User;
class UserTest extends TestCase
{
    use RefreshDatabase;

    public function successRegister()
    {
        $userData = [
            "name" => "John Doe",
            "email" => "doe@example.com",
            "password" => "demo12345",
            "confirm_password" => "demo12345",
        ];

        $this->json('POST', 'api/register', $userData, ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at',
                ],
                "access_token",
                "message"
            ]);
    }
    public function testBasicTest()
    {
        $userData = [
            "name" => "jerico nacario",
            "email" => "ekkoncario12111@example.com",
            "password" => "demo12345",
            "confirm_password"=>'demo1234513131',
        ];

        $this->json('POST', 'api/register', $userData, ['Accept' => 'application/json'])
            ->assertStatus(422)
            ->assertJson([
                    "confirm_password" => ["The confirm password and password must match."],
            ]);
    }

    public function testRegistrationFields()
    {
        $this->json('POST', 'api/register', ['Accept' => 'application/json'])
        ->assertStatus(422)
        ->assertJson([
                "name" => ["The name field is required."],
                "email" => ["The email field is required."],
                "password" => ["The password field is required."],
        ]);
    }

    public function testloginFields()
    {
        $this->json('POST', 'api/login', ['Accept' => 'application/json'])
        ->assertStatus(422)
        ->assertJson([
                "email" => ["The email field is required."],
                "password" => ["The password field is required."],
        ]);
    }
    public function testlogin()
    {
        $this->user =
            factory(User::class)->create([
                'email' => 'sample@test.com',
                'password' => bcrypt('ekko1211'),
            ]);
        $data = ['email' => 'sample@test.com','password' => 'ekko1211'];
         $this->json('POST', 'api/login',$data, ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "user" => [
                    'name',
                    'email',
                    'email_verified_at',
                    'created_at',
                    'updated_at',
                ],
                "access_token",
                "message"
            ]);
    }

    
}
