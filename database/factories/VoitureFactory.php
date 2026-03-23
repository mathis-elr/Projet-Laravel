<?php

namespace Database\Factories;

use App\Models\Employe;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voiture::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'modele' => $this->faker->randomElement(['Clio', 'Megane', '308', 'C3', '208', '5008', 'Tucson', 'Qashqai']),
            'nb_places' => $this->faker->numberBetween(2, 8),
            'id_employe' => Employe::inRandomOrder()->first()->id,
        ];
    }
}
