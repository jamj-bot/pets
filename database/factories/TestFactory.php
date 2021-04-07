<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'test_name' => $this->faker->randomElement(['blood chemistry', 'urinalysis', 'cytology', 'culture', 'complete blood count']),
            'file' => $this->faker->text(100),
        ];
    }
}
