<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
        	'code' => '0235698488',
        	'name' => 'Arturo Molina',
        	'phone' => '(332) 589-1219',
        	'email' => 'arturomolina@live.com'
        ]);

        Owner::factory(3)->create();
    }
}
