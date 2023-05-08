<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
           $users = User::factory()
                ->count(10)
                ->state(new Sequence(
                    ['level' => 'admin'],
                    ['level' => 'pembeli'],
                ))
                ->create();
    }
}
