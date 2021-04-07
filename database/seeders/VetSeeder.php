<?php

namespace Database\Seeders;

use App\Models\Vet;
use Illuminate\Database\Seeder;

class VetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vet::create([
        	'code' => '0212756488',
        	'name' => 'M.V.Z Arturo Molina',
        	'phone' => '(332) 589-1219',
        	'email' => 'arturomolina@live.com'
        ]);

        Vet::factory(1)->create();
    }
}
