<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileEventListController extends Controller
{
    public function available()
    {
        return view('modules.profile.available');
    }

    public function history()
    {
        return view('modules.profile.history');
    }
}
