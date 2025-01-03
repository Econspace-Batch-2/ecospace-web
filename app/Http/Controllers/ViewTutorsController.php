<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class ViewTutorsController extends Controller
{
    public function index(Request $request) {
        // all by default -> dikasih gini agar filter ga error
        $major = $request->input('major') ?? 'all';
        $semester = $request->input('semester') ?? 'all';
        $univ = $request->input('univ') ?? 'all';
        $searchTerm = $request->input('tutorSearchBar') ?? '';
        $take = $request->input('take') ?? 6;

        $query = Subject::where('status', 'active');

        if ($major != 'all') {
            $query->whereJsonContains('subject_majors', $major);
        }

        if ($semester != 'all') {
            $query->where('subject_semester', $semester);
        }

        if ($univ != 'all') {
            $query->whereJsonContains('univ', $univ);
        }

        $subjects = $query->paginate($take);
        $recommendedSubjects = Subject::where('status', 'active')
            ->inRandomOrder()
            ->take(3)
            ->get();
        

        return view('modules.tutor.viewTutors', compact('subjects', 'recommendedSubjects', 'major', 'semester', 'univ'));
    }
}
