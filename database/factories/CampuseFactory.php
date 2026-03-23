<?php

namespace Database\Factories;

use App\Models\Campuse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campuse>
 */
class CampuseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campuse::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(),
            'adresse' => $this->faker->address(),
            'type' => $this->faker->randomElement(['Université', 'École', 'Centre de formation', 'Campus technologique']),
        ];
    }
}
