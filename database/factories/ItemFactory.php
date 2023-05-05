<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'jenis_barang' => "alat",
            'deskripsi' => "whatever",
            'gambar' => $this->faker->image(),
            'stok'=> $this->faker->numberBetween(0,100),
            'harga_beli' => $this->faker->randomDigit(),
            'harga_jual'=> $this->faker->numberBetween($this->harga_beli,($this->harga_beli+12))
        ];
    }
}
