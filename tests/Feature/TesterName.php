<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Sales;

class TesterName extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_generate_report_data()
    {
        $sales = Sales::factory()->count(10)->create();
    }

    public function test_has_n_table(){
        $this->assertDatabaseCount('sales', 10);
    }
}
