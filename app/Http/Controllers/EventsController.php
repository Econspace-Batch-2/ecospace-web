<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function show() {
        $search = request('search');
        $category = request('category');
        $take = request('take');

        if ($category == 'all') {
            $category = '';
        }

        $events = Event::where('name', 'like', "%$search%")
            ->when($category, function ($query, $category) {
            return $query->where('categories', 'like', "%$category%");
            })
            ->get();

        // Take top 6 events
        $events = $events->take(
            $take ? $take : 6
        );

        return view('modules.event.show', compact('events'));
    }
}
