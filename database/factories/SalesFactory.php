<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales>
 */
class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_user' => $this->faker->numberBetween(1,10),
            'nama_user'  => $this->faker->name(),
            'id_barang',
            'nama_barang',
            'qty',
            'harga_jual',
            'total'
        ];
    }
}
