<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Sales;
use App\Models\Item;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /*
    public function test_generate_report_data()
    {
        $item = Item::factory()->count(10)->create();
    }
    */
    public function test_users_has_n_table(){
        $this->assertDatabaseCount('users', 10);
    }
}
