<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PlaygroundsController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\StadiumsController;
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

Route::prefix('/seagame')->name('seagame')->group(function () {

    /**
     * Countries resource
     */
    Route::resource('/country', CountriesController::class);

    /**
     * Sports resource:
     */
    Route::resource('/sport', SportsController::class);

    /**
     * Events resource:
     */
    Route::resource('/event', EventsController::class);

    /**
     * Stadiums resource:
     */
    Route::resource('/stadium', StadiumsController::class);

    /**
     * Schedules resource:
     */
    Route::resource('/schedule', SchedulesController::class);

    /**
     * Playgrounds resource:
     */
    Route::resource('/playground', PlaygroundsController::class);

    Route::get('/booking/{id}', [MainController::class, 'bookingTicket'])->name('booking');

    Route::prefix('/availables')->name('availables')->group(function () {
        Route::get('/schedules/{id}', [MainController::class, 'availableSchedulesForDate'])->name('schedules');
        Route::get('/evenDate', [MainController::class, 'searchForEvenDate'])->name('date');
        Route::get('/sport', [MainController::class, 'schedulesForSport'])->name('sport.search');
    });

    /**
     * BookingTicket:
     */

    /***/
    // Route::resource('/country', MainController::class);
});
