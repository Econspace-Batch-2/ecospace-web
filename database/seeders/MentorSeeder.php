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
                'name' => "Keyra Audrey Annabelle C",
                'email' => "keyraaudreyannabellechristian2005@mail.ugm.ac.id",
                'phone' => "081219528614",
                'position' => "Mentor",
                'company' => "UGM",
                'profile' => "Keyra Audrey Annabelle C.jpg",
                'achievements' => json_encode([
                    "Highest GPA of Accounting Batch 2023 Year 2024",
                    "3rd Winner of Accounting Challenge for Newcomers (ACN) 2023 held by Ikatan Mahasiswa Akuntansi Gadjah Mada (IMAGAMA)",
                    "3rd Winner of Scandinavian Day Essay Competition 2023 held by Scandinavia Community FISIPOL UGM"
                ]),
                'linkedin' => "http://linkedin.com/in/keyra-audrey-annabelle-christian-ba8626240",
                'category' => json_encode(["Accounting"]),
                'created_at' => now()->subDays(6),
                'updated_at' => now(),
            ],
            [
                'name' => "Muhammad Ikhsan Arditya M",
                'email' => "ikhsanaco87@gmail.com",
                'phone' => "081806726899",
                'position' => "Mentor",
                'company' => "UGM",
                'profile' => "Ikhsan's Photo",
                'achievements' => json_encode([
                    "Sponsorship Team for Gadjah Mada Accounting Days (GMAD)",
                    "Career Preparation Staff of Ikatan Mahasiswa Akuntansi Gadjah Mada (IMAGAMA)",
                    "Financial & Logistic Staff of Bimasakti Racing Team"
                ]),
                'linkedin' => "www.linkedin.com/in/ikhsanmannan",
                'category' => json_encode(["Accounting"]),
                'created_at' => now()->subDays(5),
                'updated_at' => now(),
            ],
            [
                'name' => "Devita Ananda Pohan",
                'email' => "devitaanandapohan@mail.ugm.ac.id",
                'phone' => "085297578473",
                'position' => "Mentor",
                'company' => "UGM",
                'profile' => "Professional Photo - Devita Ananda Pohan - Devita Ananda Pohan.HEIC",
                'achievements' => json_encode([
                    "General Administrative, Finance & Tax Intern at Direktorat Jenderal Pajak",
                    "Co-Facilitator KREASI FEB UGM",
                    "Intellectual Development Department of Ikatan Mahasiswa Akuntansi Gadjah Mada (IMAGAMA)"
                ]),
                'linkedin' => "www.linkedin.com/in/devitaanandapohan",
                'category' => json_encode(["Accounting"]),
                'created_at' => now()->subDays(4),
                'updated_at' => now(),
            ],
            [
                'name' => "Cynthia Fransisca",
                'email' => "cynthiafransisca@mail.ugm.ac.id",
                'phone' => "087749472861",
                'position' => "Mentor",
                'company' => "UGM",
                'profile' => "IMG_6916 - Cynthia Fransisca.jpeg",
                'achievements' => json_encode([
                    "Highest GPA Accounting Batch 2022 Year 2023",
                    "TELADAN Leadership Scholarship Awardee by Tanoto Foundation",
                    "3rd Winner of National Accounting Competition 2024 by Bangka Belitung University"
                ]),
                'linkedin' => "https://www.linkedin.com/in/cynthia-fransisca?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app",
                'category' => json_encode(["Accounting"]),
                'created_at' => now()->subDays(3),
                'updated_at' => now(),
            ],
            [
                'name' => "Zepri Ramadan",
                'email' => "zepriramadan2003@mail.ugm.ac.id",
                'phone' => "089518501170",
                'position' => "Mentor",
                'company' => "UGM",
                'profile' => "IMG-20230704-WA0007 - ZEPRI RAMADAN.jpg",
                'achievements' => json_encode([
                    "2.5 years of tutoring experience for UGM Students in Economics",
                    "Favorite Student Teacher in Economics 2023"
                ]),
                'linkedin' => "linkeldin.com/in/jepri-ramadan",
                'category' => json_encode(["Economics"]),
                'created_at' => now()->subDays(2),
                'updated_at' => now(),
            ],
            [
                'name' => "Adinda Dewi",
                'email' => "adindadewiariestuti@mail.ugm.ac.id",
                'phone' => "089696780842",
                'position' => "Mentor",
                'company' => "UGM",
                'profile' => "515903_Adinda Dewi Ariestuti_Foto Diri - Adinda Dewi Ariestuti.png",
                'achievements' => json_encode([
                    "Awardee Funding Program Pembinaan Mahasiswa Wirausaha (P2MW) 2024: Creative, Arts, and Culture Industry",
                    "1st Winner of Management Startup Challenge (MSC)",
                    "2nd Winner of Sebelas Maret Business Plan Competition"
                ]),
                'linkedin' => "https://www.linkedin.com/in/adindadewiariestuti/",
                'category' => json_encode(["Management"]),
                'created_at' => now()->subDay(),
                'updated_at' => now(),
            ],
        ];
        // Insert data into the mentors table
        DB::table('mentors')->insert($mentors);
    }
}
