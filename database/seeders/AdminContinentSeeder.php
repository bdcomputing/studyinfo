<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('continents')->insert([
            [
                "name" => "Africa",
                "code" => "AF",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Antarctica",
                "code" => "AN",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Asia",
                "code" => "AS",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Europe",
                "code" => "EU",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "North America",
                "code" => "NA",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "South America",
                "code" => "SA",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name" => "Oceania",
                "code" => "OC",
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
