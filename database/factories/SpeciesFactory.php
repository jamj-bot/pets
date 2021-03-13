<?php

namespace Database\Factories;

use App\Models\Species;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpeciesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Species::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'common_name' => $this->faker->randomElement(['Perro', 'Caballo','Gato', 'Conejo', 'Vaca', 'Varano acuático']),
            'scientific_name' => $this->faker->randomElement(['Canis familiaris', 'Oryctolagus cuniculus', 'Varanos salvator', 'Equus caballus', 'Felis catus']),
        ];
    }
}
