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
                'icon' => 'fas fa-wifi',
                'description' => 'Free Wi-Fi'
            ],
            [
                'name' => 'Toilet',
                'icon' => 'fas fa-toilet',
                'description' => 'Toilet'
            ],
            [
                'name' => 'AC',
                'icon' => 'fas fa-fan',
                'description' => 'Air Conditioner'
            ],
            [
                'name' => 'TV',
                'icon' => 'fas fa-tv',
                'description' => 'Television'
            ],
            [
                'name' => 'Reclining Seat',
                'icon' => 'fas fa-couch',
                'description' => 'Reclining Seat'
            ],
            [
                'name' => 'Blanket',
                'icon' => 'fas fa-bed',
                'description' => 'Blanket'
            ],
            [
                'name' => 'Pillow',
                'icon' => 'fas fa-couch',
                'description' => 'Pillow'
            ],
            [
                'name' => 'Snack',
                'icon' => 'fas fa-cookie',
                'description' => 'Snack'
            ],
            [
                'name' => 'Drink',
                'icon' => 'fas fa-glass-whiskey',
                'description' => 'Drink'
            ],
            [
                'name' => 'Power Outlet',
                'icon' => 'fas fa-plug',
                'description' => 'Power Outlet'
            ],
            [
                'name' => 'Safety Belt',
                'icon' => 'fas fa-user-shield',
                'description' => 'Safety Belt'
            ],
            [
                'name' => 'First Aid Kit',
                'icon' => 'fas fa-first-aid',
                'description' => 'First Aid Kit'
            ],
            [
                'name' => 'Fire Extinguisher',
                'icon' => 'fas fa-fire-extinguisher',
                'description' => 'Fire Extinguisher'
            ],
            [
                'name' => 'Emergency Exit',
                'icon' => 'fas fa-sign-out-alt',
                'description' => 'Emergency Exit'
            ],
            [
                'name' => 'Luggage Storage',
                'icon' => 'fas fa-suitcase',
                'description' => 'Luggage Storage'
            ],
            [
                'name' => 'Wheelchair Accessible',
                'icon' => 'fas fa-wheelchair',
                'description' => 'Wheelchair Accessible'
            ],
            [
                'name' => 'Pet Allowed',
                'icon' => 'fas fa-dog',
                'description' => 'Pet Allowed'
            ],
            [
                'name' => 'Bicycle Allowed',
                'icon' => 'fas fa-bicycle',
                'description' => 'Bicycle Allowed'
            ],
            [
                'name' => 'Smoking Allowed',
                'icon' => 'fas fa-smoking',
                'description' => 'Smoking Allowed'
            ],
            [
                'name' => 'Alcohol Allowed',
                'icon' => 'fas fa-beer',
                'description' => 'Alcohol Allowed'
            ],
            [
                'name' => 'Music Allowed',
                'icon' => 'fas fa-music',
                'description' => 'Music Allowed'
            ],
            [
                'name' => 'Phone Call Allowed',
                'icon' => 'fas fa-phone',
                'description' => 'Phone Call Allowed'
            ],
            [
                'name' => 'Photography Allowed',
                'icon' => 'fas fa-camera',
                'description' => 'Photography Allowed'
            ],
            [
                'name' => 'Videography Allowed',
                'icon' => 'fas fa-video',
                'description' => 'Videography Allowed'
            ],
        ];

        foreach ($facilities as $facility) {
            \App\Models\Facility::create($facility);
        }
    }
}
