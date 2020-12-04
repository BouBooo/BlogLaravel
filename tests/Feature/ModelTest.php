<?php

namespace Tests\Feature;

use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testValidUser()
    {
        $faker = Factory::create();
        $email = $faker->unique()->email;
        $count = User::count();

        $response = $this->post('/register', [
           'email' => $email,
           'name' => 'test',
           'password' => 'password',
           'password_confirmation' => 'password',
           'role' => 'USER'
        ]);

        $newCount = User::count();
        
        $this->assertNotEquals($count, $newCount);    
    }

    public function testInvalidUser()
    {
       
        $response = $this->post('/register', [
           'email' => '',
           'name' => 'test',
           'password' => 'toor',
           'password_confirmation' => 'password',
           'role' => 'USER'
        ]);

        $response->assertSessionHasErrors();
    }
}
