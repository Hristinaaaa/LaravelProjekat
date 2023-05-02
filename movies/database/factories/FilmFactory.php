<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Glumac;
use App\Models\Reziser;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ime' => $this->faker->sentence(5),
            'zanr' => $this->faker->sentence(1),
            'trajanje'=>$this->faker->numberBetween(60, 200),
            'reziser_id' => Reziser::factory(),
            'glumac_id' => Glumac::factory(),
            'user_id' => User::factory(),
        ];
    }
}
