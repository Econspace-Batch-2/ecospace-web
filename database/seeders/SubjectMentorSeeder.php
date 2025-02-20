<?php

namespace Database\Seeders;

use App\Models\Mentor;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectMentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mentor = Mentor::where('id', '1')->first();

        $mentor->subjects()->attach(Subject::where('id', '4')->first());

        $mentor = Mentor::where('id', '2')->first();

        $mentor->subjects()->attach(Subject::where('id', '2')->first());

        $mentor = Mentor::where('id', '3')->first();

        $mentor->subjects()->attach(Subject::where('id', '3')->first());

        $mentor = Mentor::where('id', '4')->first();

        $mentor->subjects()->attach(Subject::where('id', '5')->first());

        $mentor = Mentor::where('id', '5')->first();

        $mentor->subjects()->attach(Subject::where('id', '7')->first());

        $mentor = Mentor::where('id', '6')->first();

        $mentor->subjects()->attach(Subject::where('id', '1')->first());
    }
}
