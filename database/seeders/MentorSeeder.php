<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mentors = [
            [
                'name' => "Kevin Roland",
                'position' => "Accountant",
                'company' => "EY Industry",
                'thumbnail' => "kevin.svg",
                "profile" => "kevin.svg",
                "linkedin" => "https://www.linkedin.com/",
                "achievements" => json_encode(['Juara 1 International Accounting', '20 Tahun Bekerja Sebagai Akuntan']),
                "category" => json_encode(["Managerial Accounting"]),
                "photo_journey" => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Evan Songfa",
                'position' => "Financial",
                'company' => "EY Industry",
                'thumbnail' => "evan.svg",
                "profile" => "evan.svg",
                "linkedin" => "https://www.linkedin.com/",
                "achievements" => json_encode(['Juara 1 International Accounting', '20 Tahun Bekerja Sebagai Akuntan']),
                "category" => json_encode(["Financial Accounting"]),
                "photo_journey" => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rendra",
                'position' => "Financial",
                'company' => "EY Industry",
                'thumbnail' => "rendra.svg",
                "profile" => "rendra.svg",
                "linkedin" => "https://www.linkedin.com/",
                "achievements" => json_encode(['Juara 1 International Accounting', '20 Tahun Bekerja Sebagai Akuntan']),
                "category" => json_encode(["Financial Accounting"]),
                "photo_journey" => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Raihan Siapa",
                'position' => "Accounting",
                'company' => "EY Industry",
                'thumbnail' => "raihan.svg",
                "profile" => "raihan.svg",
                "linkedin" => "https://www.linkedin.com/",
                "achievements" => json_encode(['Juara 1 International Accounting', '20 Tahun Bekerja Sebagai Akuntan']),
                "category" => json_encode(["Financial Accounting"]),
                "photo_journey" => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        // Insert data into the mentors table
        DB::table('mentors')->insert($mentors);
    }
}
