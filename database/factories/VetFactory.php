<?php

namespace Database\Factories;

use App\Models\Vet;
use Illuminate\Database\Eloquent\Factories\Factory;

class VetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('############'),
            'name' => $this->faker->name(),
            'phone' => $this->faker->unique()->numerify('(33#) ###-####'),
            'email' => $this->faker->unique()->email,
        ];
    }
}
