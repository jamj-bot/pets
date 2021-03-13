<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Pet;
use App\Models\Vet;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Consultation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pet_id' => Pet::all()->random()->id,
            'vet_id' => Vet::all()->random()->id,
            'weight' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 50),
            'temperature' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 34, $max = 42),
            'capillary_refill_time' => $this->faker->randomElement(['less than 1 second', '1-2 seconds', 'longer than 2 seconds']),
            'heart_rate' => $this->faker->numberBetween($min = 50, $max = 250),
            'pulse' => $this->faker->randomElement(['strong and synchronous with each heart beat', 'irregular', 'bounding', 'weak or absent']),
            'respiratory_rate' => $this->faker->numberBetween($min = 0, $max = 100),
            'reproductive_status' => $this->faker->randomElement(['pregnant', 'lactating', 'neither']),
            'consciousness' => $this->faker->randomElement(['alert and responsive to surroundings', 'depressed or obtunded', 'stupor', 'comatose']),
            'pain' => $this->faker->randomElement(['vocalization', 'changes in behavior', 'physical changes']),
            'body_condition' => $this->faker->randomElement(['Too thin', 'ideal', 'too heavy']),
            'anamnesis' => $this->faker->paragraphs($nb = 3, $asText = true),
            'observations' => $this->faker->paragraphs($nb = 10, $asText = true),
            'problem_list' => $this->faker->paragraphs($nb = 5, $asText = true),
            'master_list' => $this->faker->paragraphs($nb = 3, $asText = true),
            'diagnosis' => $this->faker->paragraphs($nb = 1, $asText = true),
            'prognosis' => $this->faker->randomElement(['favorable', 'moderado', 'grave', 'reservado']),
            'treatment_plan' => $this->faker->paragraphs($nb = 5, $asText = true),
            'intructions_to_owner' => $this->faker->paragraphs($nb = 2, $asText = true),
            'consult_status' => $this->faker->randomElement(['open', 'closed']),
        ];
    }
}
