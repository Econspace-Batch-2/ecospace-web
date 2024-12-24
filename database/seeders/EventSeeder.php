<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'name' => 'Tech Conference 2023',
                'description' => 'A conference about the latest in tech.',
                'start_date' => '2023-11-01',
                'end_date' => '2023-11-03',
                'categories' => 'workshop,seminar,bootcamp,webinar',
                'harga' => 100000,
                'event_image' => 'tech_conference_2023.jpg',
                'speaker' => 'John Doe',
                'speaker_image' => 'john_doe.jpg',
            ],
            [
                'name' => 'Health & Wellness Expo',
                'description' => 'An expo focused on health and wellness.',
                'start_date' => '2023-12-05',
                'end_date' => '2023-12-07',
                'categories' => 'workshop,seminar,bootcamp,webinar',
                'harga' => 50000,
                'event_image' => 'health_wellness_expo.jpg',
                'speaker' => 'Jane Smith',
                'speaker_image' => 'jane_smith.jpg',
            ],
            [
                'name' => 'Business Summit 2023',
                'description' => 'A summit for business professionals.',
                'start_date' => '2023-10-15',
                'end_date' => '2023-10-17',
                'categories' => 'workshop,seminar,bootcamp,webinar',
                'harga' => 150000,
                'event_image' => 'business_summit_2023.jpg',
                'speaker' => 'Alice Johnson',
                'speaker_image' => 'alice_johnson.jpg',
            ]
        ];

        DB::table('events')->insert($events);
    }
}
