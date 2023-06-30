<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/lang', 'lang')->name('lang');
});

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'sendMessage')->name('sendMessage');
    Route::get('/show-messages', 'showMessages')->name('show.messages');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('admin/login', 'create')->name('login');
    Route::post('admin/login', 'login')->name('admin');
    Route::get('logout', 'logout')->name('logout');
});
Route::get('admin/dashboard', function () {
    if (!session()->get('admin')) {
        return redirect()->route('login');
    }
    return view('admin.dashboard');
});
Route::controller(NewsController::class)->group(function () {

    Route::get('/news', 'index')->name('news');
    Route::get('/admin/news', 'admin_news')->name('admin.news');
});
