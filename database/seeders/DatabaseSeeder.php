<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Owner;
use App\Models\Species;
use App\Models\Test;
use App\Models\pet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('pets');
        Storage::makeDirectory('pets');
        Storage::deleteDirectory('files');
        Storage::makeDirectory('files');


    	$this->call(UserSeeder::class);
        $this->call(VetSeeder::class);
        $this->call(OwnerSeeder::class);
    	Species::factory(5)->create();
    	$this->call(PetSeeder::class);
        Test::factory(5)->create();
        $this->call(ConsultationSeeder::class);
    }
}
