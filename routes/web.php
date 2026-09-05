<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/services', 'services')->name('services');

Route::view('/projects', 'projects')->name('projects');

Route::view('/technologies', 'technologies')->name('technologies');

Route::view('/contact', 'contact')->name('contact');