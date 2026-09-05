<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/services', 'services')->name('services');

Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])
    ->name('projects.show');

Route::view('/technologies', 'technologies')->name('technologies');

Route::view('/contact', 'contact')->name('contact');