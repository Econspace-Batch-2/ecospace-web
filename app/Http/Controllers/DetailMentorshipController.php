<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailMentorshipController extends Controller
{
    public function index()
    {
        return view('modules.mentorship.detailMentorship');
    }
}
