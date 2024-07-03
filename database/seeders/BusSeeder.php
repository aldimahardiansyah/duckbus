<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buses = [
            [
                'name' => 'Bus Pariwisata 1',
                'plate_number' => 'B 1234 ABC',
                'capacity' => 45,
                'transmission' => 'Manual',
                'fuel_type' => 'Diesel',
                'description' => 'Bus pariwisata dengan kapasitas 45 penumpang, nyaman dan aman.',
                'price_per_day' => 1500000.00,
            ],
            [
                'name' => 'Bus Pariwisata 2',
                'plate_number' => 'B 5678 DEF',
                'capacity' => 50,
                'transmission' => 'Automatic',
                'fuel_type' => 'Diesel',
                'description' => 'Bus pariwisata dengan kapasitas 50 penumpang, dilengkapi fasilitas lengkap.',
                'price_per_day' => 1750000.00,
            ],
            [
                'name' => 'Bus Pariwisata 3',
                'plate_number' => 'B 9101 GHI',
                'capacity' => 40,
                'transmission' => 'Manual',
                'fuel_type' => 'Bensin',
                'description' => 'Bus pariwisata dengan kapasitas 40 penumpang, cocok untuk perjalanan jauh.',
                'price_per_day' => 1400000.00,
            ]
        ];

        foreach ($buses as $bus) {
            \App\Models\Bus::create($bus);
        }
    }
}
