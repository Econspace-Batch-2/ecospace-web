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
                'mentor_name' => "Kevin Roland",
                'mentor_position' => "Accountant",
                'mentor_company' => "EY Industry",
                'mentor_thumbnail' => "kevin.svg",
                "mentor_profile" => "kevin.svg",
                "mentor_linkedin" => "https://www.linkedin.com/",
                "mentor_achievements" => json_encode(['Juara 1 International Accounting', '20 Tahun Bekerja Sebagai Akuntan']),
                "mentor_category" => json_encode(["Managerial Accounting"]),
                "mentor_photo_journey" => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mentor_name' => "Evan Songfa",
                'mentor_position' => "Financial",
                'mentor_company' => "EY Industry",
                'mentor_thumbnail' => "evan.svg",
                "mentor_profile" => "evan.svg",
                "mentor_linkedin" => "https://www.linkedin.com/",
                "mentor_achievements" => json_encode(['Juara 1 International Accounting', '20 Tahun Bekerja Sebagai Akuntan']),
                "mentor_category" => json_encode(["Financial Accounting"]),
                "mentor_photo_journey" => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mentor_name' => "Rendra",
                'mentor_position' => "Financial",
                'mentor_company' => "EY Industry",
                'mentor_thumbnail' => "rendra.svg",
                "mentor_profile" => "rendra.svg",
                "mentor_linkedin" => "https://www.linkedin.com/",
                "mentor_achievements" => json_encode(['Juara 1 International Accounting', '20 Tahun Bekerja Sebagai Akuntan']),
                "mentor_category" => json_encode(["Financial Accounting"]),
                "mentor_photo_journey" => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mentor_name' => "Raihan Siapa",
                'mentor_position' => "Accounting",
                'mentor_company' => "EY Industry",
                'mentor_thumbnail' => "raihan.svg",
                "mentor_profile" => "raihan.svg",
                "mentor_linkedin" => "https://www.linkedin.com/",
                "mentor_achievements" => json_encode(['Juara 1 International Accounting', '20 Tahun Bekerja Sebagai Akuntan']),
                "mentor_category" => json_encode(["Financial Accounting"]),
                "mentor_photo_journey" => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        // Insert data into the mentors table
        DB::table('mentors')->insert($mentors);
    }
}
