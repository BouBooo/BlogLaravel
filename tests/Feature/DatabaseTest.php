<?php

namespace Tests\Feature;

use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testValidUser()
    {
        $count = User::count();

        $response = $this->post('/register', [
           'email' => 'florent@nicolas.com',
           'name' => 'test',
           'password' => 'password',
           'password_confirmation' => 'password',
           'role' => 'USER'
        ]);

        $newCount = User::count();
        
        $this->assertNotEquals($count, $newCount);   
    }
}
