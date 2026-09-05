<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/services', [ServiceController::class, 'index'])->name('services');

Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::view('/technologies', 'technologies')->name('technologies');

Route::view('/contact', 'contact')->name('contact');