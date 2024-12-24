<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectMentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allSubjects = \App\Models\Subject::all();
        $allMentors = \App\Models\Mentor::all();

        // attach all mentor to all subject
        foreach ($allSubjects as $subject) {
            $subject->mentors()->attach($allMentors->pluck('id')->toArray());
        }
    }
}
