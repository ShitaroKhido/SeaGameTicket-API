<?php

namespace Database\Seeders;

use App\Models\Sports;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = [
            'Athletics',
            'Aquatics',
            'Archery',
            'Badminton',
            'Basketball',
            'Pool Snookers',
            'Boxing',
            'Canoe/Kayak',
            'Chess',
            'Xiangqi',
            'Bike Racing',
            'Dance Sports',
            'Fencing',
            'Football',
            'Golf',
            'Gymnastics',
            'Handball',
            'Judo',
            'Karate',
            'Kun Khmer',
            'Pentaques',
            'Pencak Silat',
            'Rowing',
            'Sepak Takraw',
            'Shooting',
            'Table Tennis',
            'Tennis',
            'Volleyball',
            'Taekwondo',
            'Weightlifting',
            'Wrestling',
            'Wushu',
            'Bodybuilding',
            'Bowling',
            'Esports',
            'Dives',
            'Kickboxing',
            'Kurash',
            'Jujitsu',
            'Triathlon and Duathlon',
            'Vovinam',
        ];
        foreach ($sports as $sport) {
            Sports::create(['name' => $sport]);
        }
    }
}
