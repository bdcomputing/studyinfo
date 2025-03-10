<?php

use App\Http\Controllers\AdminController;
use Illuminate\Routing\Route;

Route::prefix("admin")->group(function () {
    Route::get('/dashboard', [AdminController::class, "dashboard"])->name("dashboard");
})->name("admin.");
