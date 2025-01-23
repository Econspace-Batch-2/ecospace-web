<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventAdminController extends Controller
{
    /**
     * Get all events
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $events = Event::all();
            
            return response()->json([
                'data' => $events,
                'message' => 'Events retrieved successfully',
                'status' => 'success'
            ], 200);

        } catch (\Exception $e) {
            Log::error('Error fetching events: ' . $e->getMessage());
            
            return response()->json([
                'message' => 'Error retrieving events',
                'status' => 'error'
            ], 500);
        }
    }

    /**
     * Get participants by event ID
     * 
     * @param Request $request
     * @param int $eventId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getParticipants(Request $request, $eventId)
    {
        try {
            $event = Event::findOrFail($eventId);
            
            $participants = $event->registeredUsers()
                ->select('users.id', 'users.name', 'users.email', 'users.phone')
                ->get();
            
            return response()->json([
                'data' => $participants,
                'message' => 'Participants retrieved successfully',
                'status' => 'success'
            ], 200);

        } catch (\Exception $e) {
            Log::error('Error fetching event participants: ' . $e->getMessage());
            
            return response()->json([
                'message' => 'Error retrieving participants',
                'status' => 'error'
            ], 500);
        }
    }

    /**
     * Create a new event
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $event = new Event();
            $event->name = $request->name;
            $event->description = $request->description;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->categories = $request->categories;
            $event->harga = $request->harga;
            $event->event_image = $request->event_image;
            $event->speaker = $request->speaker;
            $event->speaker_image = $request->speaker_image;
            $event->save();
            
            return response()->json([
                'data' => $event,
                'message' => 'Event created successfully',
                'status' => 'success'
            ], 201);

        } catch (\Exception $e) {
            Log::error('Error creating event: ' . $e->getMessage());
            
            return response()->json([
                'message' => 'Error creating event',
                'status' => 'error'
            ], 500);
        }
    }

    /**
     * Update an event
     * 
     * @param Request $request
     * @param int $eventId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $eventId)
    {
        try {
            $event = Event::findOrFail($eventId);
            $event->name = $request->name;
            $event->description = $request->description;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->categories = $request->categories;
            $event->harga = $request->harga;
            $event->event_image = $request->event_image;
            $event->speaker = $request->speaker;
            $event->speaker_image = $request->speaker_image;
            $event->save();
            
            return response()->json([
                'data' => $event,
                'message' => 'Event updated successfully',
                'status' => 'success'
            ], 200);

        } catch (\Exception $e) {
            Log::error('Error updating event: ' . $e->getMessage());
            
            return response()->json([
                'message' => 'Error updating event',
                'status' => 'error'
            ], 500);
        }
    }

    /**
     * Delete an event
     * 
     * @param Request $request
     * @param int $eventId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, $eventId)
    {
        try {
            $event = Event::findOrFail($eventId);
            $event->delete();
            
            return response()->json([
                'message' => 'Event deleted successfully',
                'status' => 'success'
            ], 200);

        } catch (\Exception $e) {
            Log::error('Error deleting event: ' . $e->getMessage());
            
            return response()->json([
                'message' => 'Error deleting event',
                'status' => 'error'
            ], 500);
        }
    }
}