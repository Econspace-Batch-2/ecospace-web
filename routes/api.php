<?php

use App\Http\Controllers\Admin\EventAdminController;
use App\Http\Controllers\Admin\MentorAdminController;
use App\Http\Controllers\Admin\SubjectAdminController;
use App\Http\Controllers\Admin\TutorAdminController;
use App\Http\Controllers\Admin\UserAdminController;
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
    
    Route::prefix('/events')->group(function () {
        Route::get('/', [EventAdminController::class, 'index']);
        Route::get('/{eventId}/participants', [EventAdminController::class, 'getParticipants']);
    
        Route::post('/', [EventAdminController::class, 'store']);
        Route::put('/{eventId}', [EventAdminController::class, 'update']);
        Route::delete('/{eventId}', [EventAdminController::class, 'destroy']);
    });

    Route::prefix('/mentors')->group(function () {
        Route::get('/', [MentorAdminController::class, 'index']);
        Route::get('/{mentorId}', [MentorAdminController::class, 'show']);
    
        Route::post('/', [MentorAdminController::class, 'store']);
        Route::put('/{mentorId}', [MentorAdminController::class, 'update']);
        Route::delete('/{mentorId}', [MentorAdminController::class, 'destroy']);
    });

    Route::prefix('/users')->group(function () {
        Route::get('/', [UserAdminController::class, 'index']);
        Route::get('/{userId}', [UserAdminController::class, 'show']);
    
        Route::post('/', [UserAdminController::class, 'store']);
        Route::put('/{userId}', [UserAdminController::class, 'update']);
        Route::delete('/{userId}', [UserAdminController::class, 'destroy']);
    });

    Route::prefix('/subjects')->group(function () {
        Route::get('/', [SubjectAdminController::class, 'index']);
        Route::get('/{subjectId}', [SubjectAdminController::class, 'show']);
    
        Route::post('/', [SubjectAdminController::class, 'store']);
        Route::put('/{subjectId}', [SubjectAdminController::class, 'update']);
        Route::delete('/{subjectId}', [SubjectAdminController::class, 'destroy']);
    });
});
