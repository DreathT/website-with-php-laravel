<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/index', [websiteController::class,'index']) -> name('index');

Route::get('/about', [websiteController::class,'about']) -> name('about');

Route::get('/event-details', [websiteController::class,'eventDetails']) -> name('eventDetails');

Route::get('/rent-venue', [websiteController::class,'rentVenue']) -> name('rentVenue');

Route::get('/shows-events', [websiteController::class,'showsEvents']) -> name('showsEvents');

Route::get('/ticket-details', [websiteController::class,'ticketDetails']) -> name('ticketDetails');

Route::get('/tickets', [websiteController::class,'tickets']) -> name('tickets');
