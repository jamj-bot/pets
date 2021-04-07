<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\File;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consultations = Consultation::factory(50)->create();
        foreach ($consultations as $consultation) {
            $consultation->tests()->attach([
                rand(1, 3),
                rand(4, 5),
            ]);

            File::factory(2)->create([
                'consultation_id' => $consultation->id,
                'pet_id' => $consultation->pet->id
            ]);
        }
    }
}
