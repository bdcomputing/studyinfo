<?php

use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::name("admin.")->middleware("auth")->prefix("admin")->group(function () {
    Route::get('/dashboard', [AdminController::class, "dashboard"])->name("dashboard");

    // Admin Blog
    Route::get('/blogs', [AdminBlogController::class, "index"])->name("blog");
    Route::get('/blog', [AdminBlogController::class, "create"])->name("blog.create");
    Route::post('/blog', [AdminBlogController::class, "store"])->name("blog.store");
    Route::get('blog/{blog}', [AdminBlogController::class, 'show'])->name('blog.show');
    Route::get('blog/{blog}/edit', [AdminBlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{blog}', [AdminBlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/{blog}', [AdminBlogController::class, 'destroy'])->name('blog.destroy');
});
