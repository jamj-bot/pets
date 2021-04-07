<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\Owner;
use App\Models\Species;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_id' => Owner::all()->random()->id,
            'species_id' => Species::all()->random()->id,
            'chip' => $this->faker->unique()->numerify('############'),
            'name' => $this->faker->firstName('male'|'female'),
            'breed' => $this->faker->randomElement(['Weimaraner', 'Charolais', 'PRE', 'Black Angus', 'Variedad gris', 'Holland hairless']),
            'sex' => $this->faker->randomElement(['male', 'female', 'unknown']),
            'dob' => $this->faker->dateTimeBetween('2010-01-01', '2021-01-01'),
            'neutered' => $this->faker->randomElement(['yes', 'no', 'unknown']),
            'diseases' => $this->faker->sentence(),
            'allergies' => $this->faker->text(50),
            'status' => $this->faker->randomElement(['alive', 'dead']),
        ];
    }
}
