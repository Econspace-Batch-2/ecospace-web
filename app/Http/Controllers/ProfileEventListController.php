<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileEventListController extends Controller
{
    public function available()
    {
        $hideNavbar = true;

        $user = auth()->user();

        $events = $user->events->where('start_date', '>=', now());

        return view('modules.profile.available', compact('hideNavbar', 'events'));
    }

    public function history()
    {
        $hideNavbar = true;

        $user = auth()->user();

        $events = $user->events->where('start_date', '<', now());

        return view('modules.profile.history', compact('hideNavbar', 'events'));
    }
}