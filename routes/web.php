<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
