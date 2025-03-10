<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::name("admin.")->middleware("auth")->prefix("admin")->group(function () {
    Route::get('/dashboard', [AdminController::class, "dashboard"])->name("dashboard");
});
