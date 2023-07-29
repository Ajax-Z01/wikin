<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengmas>
 */
class PengmasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'user_id' => $this->faker->randomNumber(),
            // 'name' => $this->faker->word,
            // 'contact' => $this->faker->word,
            // 'description' => $this->faker->text,
            // 'image' => $this->faker->word,
        ];
    }
}
