<?php

use App\Http\Controllers\Admin\EventAdminController;
use App\Http\Controllers\Admin\TutorAdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/purchases', [TutorAdminController::class, 'index']);
    
    Route::get('/events', [EventAdminController::class, 'index']);
    Route::get('/events/{eventId}/participants', [EventAdminController::class, 'getParticipants']);
});
