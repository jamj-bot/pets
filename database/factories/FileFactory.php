<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\File;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'consultation_id' => Consultation::all()->random()->id,
            // 'pet_id' => Pet::all()->random()->id,
            'file_name' => $this->faker->word,
            'url' => 'files/' . $this->faker->image('public/storage/files', 640, 480, null, false),
            'extension' => $this->faker->randomElement(['pdf', 'png', 'jpg', 'gif'])
        ];
    }
}
