<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Pet;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pets = Pet::factory(5)->create();
    	foreach ($pets as $pet) {
            Image::factory(1)->create([
                'imageable_id' => $pet->id,
                'imageable_type' => Pet::class
            ]);
    	}
    }
}
