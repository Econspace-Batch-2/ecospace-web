<?php

use App\Http\Controllers\DetailMentorshipController;
use App\Http\Controllers\DetailTutorsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProfileEventListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewTutorsController;
use App\Http\Controllers\ViewMentorshipController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('modules.home.home');
});

Route::get(
    '/soon',
    function () {
        return view('modules.home.soon');
    }
)->name('soon');

/* View Tutor */
Route::prefix('tutors')->group(function () {
    Route::get('/', [ViewTutorsController::class, 'index'])->name('viewTutors');
    Route::get('/filter', [ViewTutorsController::class, 'filterSubjects'])->name('filterTutor');
    Route::get('/clear', [ViewTutorsController::class, 'clearFilters'])->name('clearFilters');
    Route::get('/search', [ViewTutorsController::class, 'searchSubjects'])->name('searchTutor');
    Route::get('/{id}', [DetailTutorsController::class, 'index'])->name('detailTutor');
});

// Event
Route::prefix('events')->group(function () {
    Route::get('/', [EventsController::class, 'show'])->name('viewEvents');
});

/* View mentorship */
Route::get('/mentorship', [ViewMentorshipController::class, 'index'])->name('viewMentorship');
Route::get('/mentorship/detail', [DetailMentorshipController::class, 'index'])->name('detailMentorship');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Get Purchase Page
Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');

// Profile
Route::prefix('profile')->middleware('auth')->group(function () {
    Route::prefix('event')->group(function () {
        Route::get('/available', [ProfileEventListController::class, 'available'])->name('eventAvailable');
        Route::get('/history', [ProfileEventListController::class, 'history'])->name('eventHistory');
    });
});
