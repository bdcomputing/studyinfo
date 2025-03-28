<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::routes(['register' => false]);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WebController::class, 'index'])->name('web.home');
Route::get('/contact', [WebController::class, 'contact'])->name('web.contact');
Route::get('/about', [WebController::class, 'about'])->name('web.about');
Route::get('/faqs', [WebController::class, 'faq'])->name('web.faqs');
Route::get('/admissions', [WebController::class, 'admissions'])->name('web.admissions');


// Blog
Route::name('web.blog.')->group(function () {
    Route::get("/blog", [BlogController::class, "index"])->name('index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('single');
});

// Events
Route::name("web.events.")->group(function () {
    Route::get("events", [EventController::class, "index"])->name("index");
    Route::get("event/{event}", [EventController::class, "show"])->name("show");
    Route::get("event/{event}/register", [EventController::class, "register"])->name("event-register");
    Route::post("event/{event}/register", [EventController::class, "storeRegistration"])->name("storeRegistration");
});

// Messages
Route::name("web.messages.")->group(function () {
    Route::post("message", [MessagesController::class, "store"])->name("store");
    Route::get("success", [MessagesController::class, "success"])->name("success");
});


// Programs

Route::name("web.programs.")->group(function () {
    Route::get("programs", [ProgramsController::class, "index"])->name("index");
    Route::get("program/{program}", [ProgramsController::class, "show"])->name("show");
});


// Universities
Route::name("web.universities.")->group(function () {
    Route::get("universities", [UniversityController::class, "index"])->name("index");
    Route::get("uiversity/{university}", [UniversityController::class, "show"])->name("show");
});

// Bottom (Footer Links)
Route::get('/privacy-policy', [WebController::class, 'privacy'])->name('web.bottom.privacy');
Route::get('/terms-of-service', [WebController::class, 'terms'])->name('web.bottom.terms');
Route::get('/cookie-policy', [WebController::class, 'cookie'])->name('web.bottom.cookie');






require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
