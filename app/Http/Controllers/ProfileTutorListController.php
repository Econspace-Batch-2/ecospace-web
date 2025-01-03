<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileTutorListController extends Controller
{
    public function available()
    {
        $hideNavbar = true;

        $user = auth()->user();

        $subjects = $user->subjects;

        return view('modules.profile.tutor.available', compact('hideNavbar', 'subjects'));
    }

    public function history()
    {
        $hideNavbar = true;

        $user = auth()->user();

        $subjects = $user->subjects;

        return view('modules.profile.tutor.history', compact('hideNavbar', 'subjects'));
    }
}
