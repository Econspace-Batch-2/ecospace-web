<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class DetailTutorsController extends Controller
{
    public function index(Request $request, $id) {
        $subject = Subject::with('topics')->find($id);

        $other_subjects = Subject::where('id', '!=', $id)
            ->where('status', 'active')
            ->where(function ($query) use ($subject) {
                $query->whereJsonContains('majors', $subject->majors)
                    ->orWhere('category', $subject->category)
                    ->orWhere('semester', $subject->semester);
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

        // Get Mentors
        $mentors = $subject->mentors()->get();

        $univ_query = $request->univ ? $request->univ : pathinfo(json_decode($subject->subject_univ)[0], PATHINFO_FILENAME);

        // Get All FAQs based on the subject
        $faqs = $subject->faqs()->get();

        return view('modules.tutor_detail.detailTutor', compact('subject', 'other_subjects', 'mentors', 'univ_query', 'faqs'));
    }
}
