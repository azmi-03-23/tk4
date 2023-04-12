<?php

namespace Tests\Feature;

use App\Models\User as User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_database()
    {
        $users = User::factory()->count(10)->create();

        $this->assertDatabaseCount('users', 10);
    }
}
