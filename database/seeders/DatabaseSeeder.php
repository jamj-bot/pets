<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Owner;
use App\Models\Species;
use App\Models\Vet;
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

    	$this->call(UserSeeder::class);
    	Vet::factory(2)->create();
    	Owner::factory(15)->create();
    	Species::factory(5)->create();
    	$this->call(PetSeeder::class);
    	Consultation::factory(10)->create();
    }
}
