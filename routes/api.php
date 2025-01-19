<?php

use App\Http\Controllers\TutorAdminController;
use App\Http\Controllers\EventAdminController;
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

Route::get('/purchases', [TutorAdminController::class, 'index']);

Route::get('/events', [EventAdminController::class, 'index']);
Route::get('/events/{eventId}/participants', [EventAdminController::class, 'getParticipants']);