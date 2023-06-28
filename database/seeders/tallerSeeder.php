<?php

namespace Database\Seeders;

use App\Models\taller;
use Illuminate\Database\Seeder;

class tallerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        taller::factory(75)->create();
    }
}
