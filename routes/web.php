<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\SignupController;
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

Route::get('/laravel', function () {
    return view('welcome');
});

// Front-End Routes

Route::get('/home', [websiteController::class,'index']) -> name('index');
//Route::get('/index','WebsiteController@index') -> name('index');
Route::get('/about', [websiteController::class,'about']) -> name('about');
Route::get('/event-details', [websiteController::class,'eventDetails']) -> name('eventDetails');
Route::get('/rent-venue', [websiteController::class,'rentVenue']) -> name('rentVenue');
Route::get('/shows-events', [websiteController::class,'showsEvents']) -> name('showsEvents');
Route::get('/ticket-details', [websiteController::class,'ticketDetails']) -> name('ticketDetails');
Route::get('/tickets', [websiteController::class,'tickets']) -> name('tickets');


// Auth Routes

route::get('/login', function () {return view('auth.login');}) -> name('login');
route::post('/home', [loginController::class,'authenticate']) -> name('home');

route::get('/signup', [signupController::class,'show']) -> name('signupShow');
route::post('/signup', [signupController::class,'create']) -> name('signupCreate');

