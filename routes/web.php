<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WebController::class, 'index'])->name('web.home');
Route::get('/contact', [WebController::class, 'contact'])->name('web.contact');
Route::get('/about', [WebController::class, 'about'])->name('web.about');
Route::get('/faqs', [WebController::class, 'faq'])->name('web.faqs');
Route::get('/admissions', [WebController::class, 'admissions'])->name('web.admissions');
Route::get('/apply', [WebController::class, 'apply'])->name('web.apply');

// Programs/Courses Routes
Route::prefix('courses')->name('web.programs.')->group(function () {
    Route::get('/', [WebController::class, 'programs'])->name('all');
    Route::get('/ict', [WebController::class, 'ict'])->name('ict');
    Route::get('/nursing', [WebController::class, 'nursing'])->name('nursing');
    Route::get('/hospitality', [WebController::class, 'hospitality'])->name('hospitality');
    Route::get('/short-courses', [WebController::class, 'shortcourses'])->name('shortcourses');
    Route::get('/business', [WebController::class, 'business'])->name('business');
    Route::get('/mechanical-engineering', [WebController::class, 'mechEngineering'])->name('mechEngineering');
});

// About Routes
Route::prefix('about-us')->name('web.about.')->group(function () {
    Route::get('/mission', [WebController::class, 'mission'])->name('mission');
    Route::get('/faculty', [WebController::class, 'faculty'])->name('faculty');
    Route::get('/partnerships', [WebController::class, 'partnership'])->name('partnerships');
    Route::get('/success', [WebController::class, 'success'])->name('success-stories');
    Route::get('/careers', [WebController::class, 'careers'])->name('careers');
    Route::get('/news', [WebController::class, 'news'])->name('news');
    Route::get('/events', [WebController::class, 'events'])->name('events');
    Route::get('/gallery', [WebController::class, 'gallery'])->name('gallery');
    Route::get('/blog', [WebController::class, 'blog'])->name('blog');
    Route::get('/team', [WebController::class, 'team'])->name('team');
});

// Bottom (Footer Links)
Route::get('/privacy-policy', [WebController::class, 'privacy'])->name('web.bottom.privacy');
Route::get('/terms-of-service', [WebController::class, 'terms'])->name('web.bottom.terms');
Route::get('/cookie-policy', [WebController::class, 'cookie'])->name('web.bottom.cookie');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
