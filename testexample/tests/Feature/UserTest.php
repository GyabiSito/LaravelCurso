<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_set_database_config(){
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('db:seed');

        $response=$this->get('/');
        $response->assertStatus(200);
    }
    /**
     * A basic feature test example.
     */
    public function test_get_users_list(): void
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            [
                'id',
                'name',
                'email',
                'email_verified_at',
                'created_at',
                'updated_at'
            ]
        ]);
        $response->assertJsonFragment(['name' => 'John Doe']);
        $response->assertJsonCount(4);
    }

    public function test_get_user_detail()
    {
        $response = $this->get('/api/users/1');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'id',
            'name',
            'email',
            'email_verified_at',
            'created_at',
            'updated_at'
        ]);
        $response->assertJsonFragment(['name' => 'John Doe']);
    }

    public function test_get_not_existing_user_detail(){
        $response = $this->get('/api/users/100');
        $response->assertStatus(404);
    }
}
