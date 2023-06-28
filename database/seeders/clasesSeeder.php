<?php

namespace Database\Seeders;

use App\Models\clase;
use Illuminate\Database\Seeder;

class clasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clase::factory(75)->create();
    }
}
