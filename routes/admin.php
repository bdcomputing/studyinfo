<?php

use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminDestinationController;
use App\Http\Controllers\admin\AdminEventController;
use App\Http\Controllers\admin\AdminUsersController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::name("admin.")->middleware("auth")->prefix("admin")->group(function () {
    Route::get('dashboard', [AdminController::class, "dashboard"])->name("dashboard");

    // Admin Blog
    Route::get('blogs', [AdminBlogController::class, "index"])->name("blog");
    Route::get('blog', [AdminBlogController::class, "create"])->name("blog.create");
    Route::post('blog', [AdminBlogController::class, "store"])->name("blog.store");
    Route::get('blog/{blog}', [AdminBlogController::class, 'show'])->name('blog.show');
    Route::get('blog/{blog}/edit', [AdminBlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{blog}', [AdminBlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/{blog}', [AdminBlogController::class, 'destroy'])->name('blog.destroy');

    // Events 
    Route::get("events", [AdminEventController::class, "index"])->name("events.index");
    Route::get("event", [AdminEventController::class, "create"])->name("events.create");
    Route::post("event", [AdminEventController::class, "store"])->name("events.store");
    Route::get("event/{event}", [AdminEventController::class, "show"])->name("events.show");
    Route::get("event/{event}/edit", [AdminEventController::class, "edit"])->name("events.edit");
    Route::put("event/{event}", [AdminEventController::class, "update"])->name("events.update");
    Route::delete("event/{event}", [AdminEventController::class, "destroy"])->name("events.destroy");
    Route::get('events/{event}/registrations', [AdminEventController::class, 'registrations'])->name('events.registrations');

    Route::patch('registrations/{registration}/status', [AdminEventController::class, 'updateRegistrationStatus'])->name('registrations.updateStatus');

    // Destinations
    Route::name("destinations.")->middleware(['admin'])->group(function () {
        Route::get("destinations", [AdminDestinationController::class, "index"])->name("index");
        Route::get("destination", [AdminDestinationController::class, "create"])->name("create");
        Route::post("destination", [AdminDestinationController::class, "store"])->name("store");
        Route::get("destination/{destination}", [AdminDestinationController::class, "show"])->name("show");
        Route::get("destination/{destination}/edit", [AdminDestinationController::class, "edit"])->name("edit");
        Route::put("destination/{destination}", [AdminDestinationController::class, "update"])->name("update");
        Route::delete("destination/{destination}", [AdminDestinationController::class, "destroy"])->name("destroy");
    });
    // Users 
    Route::name("users.")->middleware(['admin'])->group(function () {
        Route::get("users", [AdminUsersController::class, "index"])->name("index");
        Route::get('user', [RegisteredUserController::class, 'create'])->name('create');
        Route::post('user', [RegisteredUserController::class, 'store'])->name("store");
    });
});
