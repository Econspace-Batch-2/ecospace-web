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
        DB::statement('ALTER SEQUENCE mentors_id_seq RESTART WITH 1;');

        //
        $mentors = [
            [
                'name' => "Keyra Audrey Annabelle C",
                'email' => "keyraaudreyannabellechristian2005@mail.ugm.ac.id",
                'phone' => "081219528614",
                'position' => "Tutor of Introduction to Akuntansi Menegah 1",
                'company' => "UGM",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/ugm/Keyra_Audrey_Annabelle_C-removebg-preview.png",
                'achievements' => json_encode([
                    "Highest GPA of Accounting Batch 2023 Year 2024",
                    "3rd Winner of Accounting Challenge for Newcomers (ACN) 2023 held by Ikatan Mahasiswa Akuntansi Gadjah Mada (IMAGAMA)",
                    "3rd Winner of Scandinavian Day Essay Competition 2023 held by Scandinavia Community FISIPOL UGM"
                ]),
                'linkedin' => "http://linkedin.com/in/keyra-audrey-annabelle-christian-ba8626240",
                'category' => json_encode(["Akuntansi Menegah 1"]),
                'created_at' => now()->subDays(6),
                'updated_at' => now(),
                'univ' => "UGM"
            ],
            [
                'name' => "Muhammad Ikhsan Arditya M",
                'email' => "ikhsanaco87@gmail.com",
                'phone' => "081806726899",
                'position' => "Tutor of Introduction to Akuntansi Biaya dan Manajemen",
                'company' => "UGM",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/ugm/M_Ikhsan-removebg-preview.png",
                'achievements' => json_encode([
                    "Sponsorship Team for Gadjah Mada Accounting Days (GMAD)",
                    "Career Preparation Staff of Ikatan Mahasiswa Akuntansi Gadjah Mada (IMAGAMA)",
                    "Financial & Logistic Staff of Bimasakti Racing Team"
                ]),
                'linkedin' => "www.linkedin.com/in/ikhsanmannan",
                'category' => json_encode(["Akuntansi Biaya dan Manajemen"]),
                'created_at' => now()->subDays(5),
                'updated_at' => now(),
                'univ' => "UGM"
            ],
            [
                'name' => "Devita Ananda Pohan",
                'email' => "devitaanandapohan@mail.ugm.ac.id",
                'phone' => "085297578473",
                'position' => "Tutor of Introduction to Akuntansi Biaya dan Manajemen",
                'company' => "UGM",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/ugm/Professional_Photo_-_Devita_Ananda_Pohan_-_Devita_Ananda_Pohan-removebg-preview.png",
                'achievements' => json_encode([
                    "General Administrative, Finance & Tax Intern at Direktorat Jenderal Pajak",
                    "Co-Facilitator KREASI FEB UGM",
                    "Intellectual Development Department of Ikatan Mahasiswa Akuntansi Gadjah Mada (IMAGAMA)"
                ]),
                'linkedin' => "www.linkedin.com/in/devitaanandapohan",
                'category' => json_encode(["Akuntansi Biaya dan Manajemen"]),
                'created_at' => now()->subDays(4),
                'updated_at' => now(),
                'univ' => "UGM"
            ],
            [
                'name' => "Cynthia Fransisca",
                'email' => "cynthiafransisca@mail.ugm.ac.id",
                'phone' => "087749472861",
                'position' => "Tutor of Introduction to Akuntansi Lanjutan",
                'company' => "UGM",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/ugm/IMG_6916_-_Cynthia_Fransisca-removebg-preview-2.png",
                'achievements' => json_encode([
                    "Highest GPA Accounting Batch 2022 Year 2023",
                    "TELADAN Leadership Scholarship Awardee by Tanoto Foundation",
                    "3rd Winner of National Accounting Competition 2024 by Bangka Belitung University"
                ]),
                'linkedin' => "https://www.linkedin.com/in/cynthia-fransisca?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app",
                'category' => json_encode(["Akuntansi Lanjutan"]),
                'created_at' => now()->subDays(3),
                'updated_at' => now(),
                'univ' => "UGM"
            ],
            [
                'name' => "Zepri Ramadan",
                'email' => "zepriramadan2003@mail.ugm.ac.id",
                'phone' => "089518501170",
                'position' => "Tutor of Introduction to Makroekonomika 2",
                'company' => "UGM",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/ugm/IMG-20230704-WA0007_-_ZEPRI_RAMADAN-removebg-preview.png",
                'achievements' => json_encode([
                    "2.5 years of tutoring experience for UGM Students in Economics",
                    "Favorite Student Teacher in Economics 2023"
                ]),
                'linkedin' => "linkeldin.com/in/jepri-ramadan",
                'category' => json_encode(["Makroekonomika 2"]),
                'created_at' => now()->subDays(2),
                'updated_at' => now(),
                'univ' => "UGM"
            ],
            [
                'name' => "Adinda Dewi",
                'email' => "adindadewiariestuti@mail.ugm.ac.id",
                'phone' => "089696780842",
                'position' => "Tutor of Introduction to Matematika Ekonomi 2",
                'company' => "UGM",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/ugm/515903_Adinda_Dewi_Ariestuti_Foto_Diri_-_Adinda_Dewi_Ariestuti-removebg-preview.png",
                'achievements' => json_encode([
                    "Awardee Funding Program Pembinaan Mahasiswa Wirausaha (P2MW) 2024: Creative, Arts, and Culture Industry",
                    "1st Winner of Management Startup Challenge (MSC)",
                    "2nd Winner of Sebelas Maret Business Plan Competition"
                ]),
                'linkedin' => "https://www.linkedin.com/in/adindadewiariestuti/",
                'category' => json_encode(["Matematika Ekonomi 2"]),
                'created_at' => now()->subDay(),
                'updated_at' => now(),
                'univ' => "UGM"
            ],
            [
                'name' => "Adrilla Femi Velina Br Ginting",
                'email' => "adrillaginting@gmail.com",
                'phone' => "095297715694",
                'position' => "Tutor of Introduction to Economics 1",
                'company' => "UNAIR",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/unair/Adrilla_Ginting-removebg-preview.png",
                'achievements' => json_encode([
                    "Ketua departemen keilmuan hima",
                    "Wakoc pelatihan stata",
                    "Penulis buku Hustle Culture Gen z"
                ]),
                'linkedin' => "https://www.linkedin.com/in/adrilla-femi-velina-br-ginting-355b2a334/",
                'category' => json_encode(["Introduction to Economics 1"]),
                'created_at' => now()->subDay(),
                'updated_at' => now(),
                'univ' => "UNAIR"
            ],
            [
                'name' => "Muhammad Nazzar Maulana",
                'email' => "muhammad.nazzar.maulana-2023@feb.unair.ac.id",
                'phone' => "087815096413",
                'position' => "Tutor of Introduction to Cost Accounting",
                'company' => "UNAIR",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/unair/Muhammad_Nazzar_Maulana-removebg-preview.png",
                'achievements' => json_encode([
                    "Vice Head of Administration",
                    "National Semifinalist National Youth Accounting Competition by Ikatan Akuntan Indonesia Muda Komisariat",
                    "Student Teaching Assistant of Cost Accounting Subject"
                ]),
                'linkedin' => "https://www.linkedin.com/in/nazzar-maulana/",
                'category' => json_encode(["Cost Accounting"]),
                'created_at' => now()->subDay(),
                'updated_at' => now(),
                'univ' => "UNAIR"
            ],
            [
                'name' => "Niken Ayu Silfa Alya Putri",
                'email' => "ayuniken072@gmail.com",
                'phone' => "085155322718",
                'position' => "Tutor of Introduction to Cost Accounting",
                'company' => "UNAIR",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/unair/foto_-_niken-removebg-preview.png",
                'achievements' => json_encode([
                    "Finalis KIM UNAIR 2024"
                ]),
                'linkedin' => "https://www.linkedin.com/in/niken-ayu-silfa-alya-putri-aa2547351?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
                'category' => json_encode(["Cost Accounting"]),
                'created_at' => now()->subDay(),
                'updated_at' => now(),
                'univ' => "UNAIR"
            ],
            [
                'name' => "Nabila Putri Melati",
                'email' => "nabilapm0204@gmail.com",
                'phone' => "085853950575",
                'position' => "Tutor of Introduction to Intermediate Accounting 1 & Cost Accounting",
                'company' => "UNAIR",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/unair/20250111_105609_-_Nabila_Putri_M-removebg-preview.png",
                'achievements' => json_encode([
                    "No Achievements"
                ]),
                'linkedin' => "https://www.linkedin.com/in/nabilaputri02",
                'category' => json_encode(["Intermediate Accounting 1", "Cost Accounting"]),
                'created_at' => now()->subDay(),
                'updated_at' => now(),
                'univ' => "UNAIR"
            ],
            [
                'name' => "Tijanna Ketaren",
                'email' => "tijanna.k@gmail.com",
                'phone' => "087889090307",
                'position' => "Tutor of Introduction to Cost Accounting",
                'company' => "UNAIR",
                'profile' => "https://econspace.s3.ap-southeast-2.amazonaws.com/mentors/unair/6963D4CC-A2F1-4D8C-B97B-069177065805_-_Tijanna_Ketaren-removebg-preview-2.png",
                'achievements' => json_encode([
                    "External Secretary at BEM FEB UNAIR",
                    "Secretary I at TEDxUniversitas Airlangga",
                    "Competition Co-Coordinator of Airlangga Youth English Competition"
                ]),
                'linkedin' => "https://www.linkedin.com/in/tijanna-ketaren-651810288?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app",
                'category' => json_encode(["Cost Accounting"]),
                'created_at' => now()->subDay(),
                'updated_at' => now(),
                'univ' => "UNAIR"
            ],

        ];
        // Insert data into the mentors table
        DB::table('mentors')->insert($mentors);
    }
}
