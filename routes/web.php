<?php

use App\Http\Controllers\DetailMentorshipController;
use App\Http\Controllers\DetailTutorsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProfileEventListController;
use App\Http\Controllers\ProfileTutorListController;
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

    Route::prefix('/{id}')->group(function () {
        Route::get('/', [DetailTutorsController::class, 'index'])->name('detailTutor');
        Route::prefix('purchase')->group(function () {
            Route::get('/', [PurchaseController::class, 'index'])->name('purchase.index');
            Route::post('/step1', [PurchaseController::class, 'storeStep1'])->name('purchase.step1');
            Route::post('/step2', [PurchaseController::class, 'storeStep2'])->name('purchase.step2');
            Route::post('/step3', [PurchaseController::class, 'storeStep3'])->name('purchase.step3');
            Route::post('/step4', [PurchaseController::class, 'storeStep4'])->name('purchase.step4');
            Route::post('/store', [PurchaseController::class, 'store'])->name('purchase.store');
        });
    });
});

// Event
Route::prefix('events')->group(function () {
    Route::get('/', [EventsController::class, 'show'])->name('viewEvents');
});

/* View mentorship */
Route::prefix('mentorship')->group(function () {
    Route::get('/', [ViewMentorshipController::class, 'index'])->name('viewMentorship');
    Route::get('/detail', [DetailMentorshipController::class, 'index'])->name('detailMentorship');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile
Route::prefix('profile')->middleware('auth')->group(function () {
    Route::prefix('event')->group(function () {
        Route::get('/available', [ProfileEventListController::class, 'available'])->name('eventAvailable');
        Route::get('/history', [ProfileEventListController::class, 'history'])->name('eventHistory');
    });

    Route::prefix('tutor')->group(function () {
        Route::get('/available', [ProfileTutorListController::class, 'available'])->name('tutorAvailable');
        Route::get('/history', [ProfileTutorListController::class, 'history'])->name('tutorHistory');
    });
});
