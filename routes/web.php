<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/lang', 'lang')->name('lang');
});

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::controller(ContactController::class)->group(function() {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'sendMessage')->name('sendMessage');
});

Route::get('/news', [NewsController::class, 'index'])->name('news');
