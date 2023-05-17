<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Events;
use App\Models\Playgrounds;
use App\Models\Schedules;
use App\Models\Stadiums;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SportsSeeder::class);
        $this->call(CountriesSeeder::class);

        Stadiums::create(['name' => 'The Morodok Techo National Stadium', 'address' => 'Ly Yongphat St, Sangkat Prek Tasek, Khan Russey Keo, Phnom Penh, Kingdom of Cambodia.12100.']);
        Playgrounds::create([
            'zone' => 'A',
            'stadium_id' => 1,
        ]);
        Events::factory(10)->create();
        Schedules::factory(10)->create();
    }
}
