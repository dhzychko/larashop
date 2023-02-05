<?php

namespace Database\Seeders;

use App\Models\Neighbourhood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NeighbourhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Neighbourhood::factory()->times(20)->create();
    }
}
