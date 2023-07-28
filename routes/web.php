<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\AdoptionController;

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
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('aboutus');
})->name('about');

Route::get('/contact', function () {
    return view('contactus');
})->name('contact');

Route::get('/adoption', function () {
    return view('adoption');
})->name('adoption');

Route::get('/get_pets_data', [PetController::class, 'getPetsData'])->name('get_pets_data');

Route::post('/submit-adoption-application', [AdoptionController::class, 'submitApplication'])->name('submit_adoption_application');
