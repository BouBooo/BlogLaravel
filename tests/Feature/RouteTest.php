<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAccessAdminWithGuestRole()
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/');
    }

    public function testAccessAdminWithAdminRole() 
    {
        $admin = Auth::loginUsingId(1);
        $this->actingAs($admin);

        $response = $this->get('/admin');
        $response->assertRedirect('/admin/articles');
    }
}
