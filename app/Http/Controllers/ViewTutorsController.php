<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class ViewTutorsController extends Controller
{
    public function index(Request $request) {
        // all by default -> dikasih gini agar filter ga error
        $major = 'all';
        $semester = 'all';
        $subjects = Subject::where('status', 'active')->paginate(6);

        if ($request->ajax()) {
            return view('layout.subjects', compact('subjects'))->render(); // return partial view
        }

        return view('modules.tutor.viewTutors', compact('subjects', 'major', 'semester'));
    }

    // FILTER SUBJECT BASED ON MAJOR AND SEMESTER
    public function filterSubjects(Request $request)
    {
        $major = $request->input('major');
        $semester = $request->input('semester');

        $query = Subject::where('status', 'active');

        if ($major != 'all') {
            $query->whereJsonContains('subject_majors', $major);
        }

        if ($semester != 'all') {
            $query->where('subject_semester', $semester);
        }

        $subjects = $query->paginate(6);

        return view('modules.tutor.viewTutors', compact('subjects', 'semester', 'major'));
    }

    // SEARCH BASED ON SUBJECT TITLE
    public function searchSubjects(Request $request)
    {
        $major = $semester = 'all';
        $searchTerm = $request->input('tutorSearchBar');

        $subjects = Subject::where('subject_title', 'like', "%{$searchTerm}%")
                        ->where('status', 'active')
                        ->paginate(6);


        return view('layout.subjects', compact('subjects', 'major', 'semester'));
    }

    // CLEAR FILTER BUTTON FUNCTIONALITY
    public function clearFilters() {
        return redirect()->route('viewTutors');
    }


}
