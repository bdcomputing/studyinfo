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
Route::get('/faq', [WebController::class, 'faq'])->name('web.faq');
Route::get('/admissions', [WebController::class, 'admissions'])->name('web.admissions');
Route::get('/apply', [WebController::class, 'apply'])->name('web.apply');
// Programs
Route::get('/programs', [WebController::class, 'programs'])->name('web.programs.all');
Route::get('/ict', [WebController::class, 'ict'])->name('web.programs.ict');
Route::get('/nursing', [WebController::class, 'nursing'])->name('web.programs.nursing');
Route::get('/hospitality', [WebController::class, 'hospitality'])->name('web.programs.hospitality');
Route::get('/shortcourses', [WebController::class, 'shortcourses'])->name('web.programs.shortcourses');
Route::get('/business', [WebController::class, 'business'])->name('web.programs.business');
Route::get('/mechEngineering', [WebController::class, 'mechEngineering'])->name('web.programs.mechEngineering');
// About
Route::get('/mission', [WebController::class, 'mission'])->name('web.about.mission');
Route::get('/faculty', [WebController::class, 'faculty'])->name('web.about.faculty');
Route::get('/partnership', [WebController::class, 'partnership'])->name('web.about.partnerships');
Route::get('/success', [WebController::class, 'success'])->name('web.about.success-stories');
Route::get('/careers', [WebController::class, 'careers'])->name('web.about.careers');
Route::get('/news', [WebController::class, 'news'])->name('web.about.news');
Route::get('/events', [WebController::class, 'events'])->name('web.about.events');
Route::get('/gallery', [WebController::class, 'gallery'])->name('web.about.gallery');
Route::get('/blog', [WebController::class, 'blog'])->name('web.about.blog');


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
