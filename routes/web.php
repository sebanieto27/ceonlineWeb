<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// ── Marketing Landing Pages ──
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/caracteristicas', [LandingController::class, 'features'])->name('features');
Route::get('/blog', [LandingController::class, 'blogIndex'])->name('blog.index');
Route::get('/blog/{slug}', [LandingController::class, 'blogShow'])->name('blog.show');
Route::get('/soluciones', [LandingController::class, 'solutions'])->name('solutions');
Route::get('/empresa', [LandingController::class, 'about'])->name('about');
Route::redirect('/precios', '/demo');
Route::get('/demo', [LandingController::class, 'demo'])->name('demo');
Route::get('/contacto', [LandingController::class, 'contact'])->name('contact');
Route::get('/prueba-gratis', [LandingController::class, 'trialLanding'])->name('trial');
Route::get('/privacidad', [LandingController::class, 'privacy'])->name('privacy');
Route::get('/terminos', [LandingController::class, 'terms'])->name('terms');
Route::get('/links', [LandingController::class, 'bioLinks'])->name('bio.links');

// ── Form Submissions ──
Route::post('/demo', [LandingController::class, 'submitDemo'])->name('demo.submit');
Route::post('/contacto', [LandingController::class, 'submitContact'])->name('contact.submit');
Route::post('/newsletter', [LandingController::class, 'subscribe'])->name('newsletter');

// ── SEO ──
Route::get('/sitemap.xml', [LandingController::class, 'sitemap'])->name('sitemap');

// ── Admin Panel ──
// Migrado a Filament → /admin (panel automático)
