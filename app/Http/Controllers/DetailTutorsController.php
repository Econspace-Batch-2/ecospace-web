<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class DetailTutorsController extends Controller
{
    public function index($id) {
        $subject = Subject::with('topics')->find($id);

        $other_subjects = Subject::where('id', '!=', $id)
            ->where('status', 'active')
            ->where(function ($query) use ($subject) {
                $query->whereJsonContains('subject_majors', $subject->subject_majors)
                    ->orWhere('subject_category', $subject->subject_category)
                    ->orWhere('subject_semester', $subject->subject_semester);
            })
            ->limit(3)
            ->get();

        $remaining_count = 3 - $other_subjects->count();

        if ($remaining_count > 0) {
            // Fetch additional random subjects to fill the remaining slots
            $random_subjects = Subject::whereNotIn('id', $other_subjects->pluck('id')->toArray())
                ->where('status', 'active')
                ->inRandomOrder()
                ->limit($remaining_count)
                ->get();

            // Merge the random subjects with the existing subjects
            $other_subjects = $other_subjects->merge($random_subjects);
        }

        return view('modules.tutor_detail.detailTutor', compact('subject', 'other_subjects'));
    }
}
