<?php

namespace App\Http\Controllers;

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
        $adminKey = $request->header('X-Admin-Key');
        
        if (!$adminKey || $adminKey !== env('ADMIN_KEY')) {
            Log::warning('Unauthorized access attempt to events endpoint', [
                'ip' => $request->ip(),
                'provided_key' => $adminKey
            ]);
            
            return response()->json([
                'message' => 'Unauthorized access',
                'status' => 'error'
            ], 401);
        }

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
        $adminKey = $request->header('X-Admin-Key');
        
        if (!$adminKey || $adminKey !== env('ADMIN_KEY')) {
            Log::warning('Unauthorized access attempt to event participants endpoint', [
                'ip' => $request->ip(),
                'provided_key' => $adminKey
            ]);
            
            return response()->json([
                'message' => 'Unauthorized access',
                'status' => 'error'
            ], 401);
        }

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
}