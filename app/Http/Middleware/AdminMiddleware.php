<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
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

        return $next($request);
    }
}
