<?php

namespace Database\Seeders;

use App\Models\Mentor;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectMentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mentorSubjects = [
            1 => [4, 4],
            2 => [2, 2, 3],
            3 => [5, 3, 7, 6, 1, 10, 8, 6],
            6 => [1, 9, 8, 10],
            8 => [8],
            9 => [8],
            10 => [9, 8],
            11 => [8],
        ];

        foreach ($mentorSubjects as $mentorId => $subjectIds) {
            foreach ($subjectIds as $subjectId) {
                DB::table('mentor_subject')->insert([
                    'mentor_id' => $mentorId,
                    'subject_id' => $subjectId,
                ]);
            }
        }
    }
}
