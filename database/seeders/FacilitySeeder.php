<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            [
                'name' => 'Wi-Fi',
                'description' => 'Free Wi-Fi'
            ],
            [
                'name' => 'Toilet',
                'description' => 'Toilet'
            ],
            [
                'name' => 'AC',
                'description' => 'Air Conditioner'
            ],
            [
                'name' => 'TV',
                'description' => 'Television'
            ],
            [
                'name' => 'Reclining Seat',
                'description' => 'Reclining Seat'
            ],
            [
                'name' => 'Blanket',
                'description' => 'Blanket'
            ],
            [
                'name' => 'Pillow',
                'description' => 'Pillow'
            ],
            [
                'name' => 'Snack',
                'description' => 'Snack'
            ],
            [
                'name' => 'Drink',
                'description' => 'Drink'
            ],
            [
                'name' => 'Power Outlet',
                'description' => 'Power Outlet'
            ],
            [
                'name' => 'Safety Belt',
                'description' => 'Safety Belt'
            ],
            [
                'name' => 'First Aid Kit',
                'description' => 'First Aid Kit'
            ],
            [
                'name' => 'Fire Extinguisher',
                'description' => 'Fire Extinguisher'
            ],
            [
                'name' => 'Emergency Exit',
                'description' => 'Emergency Exit'
            ],
            [
                'name' => 'Luggage Storage',
                'description' => 'Luggage Storage'
            ],
            [
                'name' => 'Wheelchair Accessible',
                'description' => 'Wheelchair Accessible'
            ],
            [
                'name' => 'Pet Allowed',
                'description' => 'Pet Allowed'
            ],
            [
                'name' => 'Music Allowed',
                'description' => 'Music Allowed'
            ],
            [
                'name' => 'Phone Call Allowed',
                'description' => 'Phone Call Allowed'
            ],
            [
                'name' => 'Photography Allowed',
                'description' => 'Photography Allowed'
            ],
            [
                'name' => 'Videography Allowed',
                'description' => 'Videography Allowed'
            ],
        ];

        foreach ($facilities as $facility) {
            \App\Models\Facility::create($facility);
        }
    }
}
