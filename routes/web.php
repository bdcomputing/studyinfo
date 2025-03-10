<?php

use App\Http\Controllers\BlogController;
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


// Blog
Route::get("/blog", [BlogController::class, "list"])->name('web.blog');

// Bottom (Footer Links)
Route::get('/privacy-policy', [WebController::class, 'privacy'])->name('web.bottom.privacy');
Route::get('/terms-of-service', [WebController::class, 'terms'])->name('web.bottom.terms');
Route::get('/cookie-policy', [WebController::class, 'cookie'])->name('web.bottom.cookie');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
