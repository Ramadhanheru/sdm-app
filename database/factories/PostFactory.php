<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,28),
            'nik' =>  $this->faker->numerify('6######'),
            'nama' => $this->faker->name(),
            'jabatan' => $this->faker->jobTitle()
                ];
    }
}
