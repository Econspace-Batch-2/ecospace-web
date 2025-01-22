<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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