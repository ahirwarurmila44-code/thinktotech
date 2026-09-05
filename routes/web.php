<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/services', [ServiceController::class, 'index'])->name('services');

Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::view('/technologies', 'technologies')->name('technologies');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/request-quote', [QuoteController::class, 'index'])->name('quote');
Route::post('/request-quote', [QuoteController::class, 'store'])->name('quote.store');