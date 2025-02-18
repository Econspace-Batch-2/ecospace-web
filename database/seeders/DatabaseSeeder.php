<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Dummy',
            'email' => 'andrewdevitoaryo@gmail.com',
            'phone' => '081234567890',
            'password' => "dummy123"
        ]);
        $this->call(SubjectSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(MentorSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(SubjectMentorSeeder::class);
    }
}
