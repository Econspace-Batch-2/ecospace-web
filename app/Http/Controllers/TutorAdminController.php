<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TutorAdminController extends Controller
{
    /**
     * Get all purchases (tutor)
     * Requires ADMIN_KEY authentication
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        // Check for ADMIN_KEY in request header
        $adminKey = $request->header('X-Admin-Key');
        
        // Validate ADMIN_KEY
        if (!$adminKey || $adminKey !== env('ADMIN_KEY')) {
            Log::warning('Unauthorized access attempt to tutors endpoint', [
                'ip' => $request->ip(),
                'provided_key' => $adminKey
            ]);
            
            return response()->json([
                'message' => 'Unauthorized access',
                'status' => 'error'
            ], 401);
        }

        try {
            $purchases = Purchase::all();

            return response()->json([
                'data' => $purchases,
                'message' => 'Purchases retrieved successfully',
                'status' => 'success'
            ], 200);

        } catch (\Exception $e) {
            Log::error('Error fetching purchases: ' . $e->getMessage());
            
            return response()->json([
                'message' => 'Error retrieving purchases',
                'status' => 'error'
            ], 500);
        }
    }
}