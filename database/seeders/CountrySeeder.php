<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            "Indonesia",
            "Vietnam",
            "Laos",
            "Brunei",
            "Thailand",
            "Myanmar",
            "Philippines",
            "Cambodia",
            "Singapore",
            "Malaysia",
        ];
        foreach ($countries as $country) {
            Countries::create([
                'name' => $country
            ]);
        }
    }
}
