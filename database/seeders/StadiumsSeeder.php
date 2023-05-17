<?php

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StadiumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Stadiums::create(['name' => 'The Morodok Techo National Stadium', 'address' => 'Ly Yongphat St, Sangkat Prek Tasek, Khan Russey Keo, Phnom Penh, Kingdom of Cambodia.12100.']);
    }
}
