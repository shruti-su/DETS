<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->word(),
            'Description' => $this->faker->sentence(),
            'item_group_id' => null, // Assuming item_group_id can be null
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
