<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// ── Marketing Landing Pages ──
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/caracteristicas', [LandingController::class, 'features'])->name('features');
Route::get('/blog', [LandingController::class, 'blogIndex'])->name('blog.index');
Route::get('/blog/{slug}', [LandingController::class, 'blogShow'])->name('blog.show');
Route::get('/soluciones', [LandingController::class, 'solutions'])->name('solutions');
Route::get('/precios', [LandingController::class, 'pricing'])->name('pricing');
Route::get('/demo', [LandingController::class, 'demo'])->name('demo');
Route::get('/contacto', [LandingController::class, 'contact'])->name('contact');

// ── Form Submissions ──
Route::post('/demo', [LandingController::class, 'submitDemo'])->name('demo.submit');
Route::post('/contacto', [LandingController::class, 'submitContact'])->name('contact.submit');
Route::post('/newsletter', [LandingController::class, 'subscribe'])->name('newsletter');

// ── Admin Panel ──
Route::prefix('admin')->name('admin.')->group(function () {
    // Auth Routes
    Route::get('/login', [\App\Http\Controllers\Auth\AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [\App\Http\Controllers\Auth\AdminAuthController::class, 'logout'])->name('logout');

    // Protected Routes
    Route::middleware('auth')->group(function () {
        Route::get('/', function () { return redirect()->route('admin.posts.index'); })->name('dashboard');
        Route::resource('posts', \App\Http\Controllers\PostController::class);
    });
});
