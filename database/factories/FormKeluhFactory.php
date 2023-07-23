<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormKeluh>
 */
class FormKeluhFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'name' => $this->faker->word,
            'nik' => $this->faker->word,
            'email' => $this->faker->word,
            'location' => $this->faker->word,
            'description' => $this->faker->text,
        ];
    }
}
