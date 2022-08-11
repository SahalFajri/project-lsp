<?php

namespace Database\Factories;

use App\Models\Aspirasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class AspirasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Aspirasi::class;

    public function definition()
    {
        return [
            'nik' => $this->faker->nik(),
            'category_id' => mt_rand(1, 3),
            'lokasi' => $this->faker->streetAddress(),
            'status' => $this->faker->randomElement(['Menunggu', 'Proses', 'Selesai']),
            'ket' => $this->faker->paragraph()
        ];
    }
}
