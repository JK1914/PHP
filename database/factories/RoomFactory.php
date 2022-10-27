<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return ['number'=>fake()->numberBetween(1, 20),'square'=>fake()->numberBetween(1, 20),'has_pojector'=>fake()->numberBetween(0, 1),'building_id'=>fake()->numberBetween(1, 3)];
    }
}
