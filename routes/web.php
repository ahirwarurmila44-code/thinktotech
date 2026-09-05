<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [
        AdminAuthController::class,
        'showLogin'
    ])->name('admin.login');

    Route::post('/admin/login', [
        AdminAuthController::class,
        'login'
    ])->name('admin.login.store');
});


/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [
            AdminDashboardController::class,
            'index'
        ])->name('dashboard');

        Route::post('/logout', [
            AdminAuthController::class,
            'logout'
        ])->name('logout');
    });

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/services', 'services')->name('services');

Route::view('/projects', 'projects')->name('projects');

Route::view('/technologies', 'technologies')->name('technologies');

Route::view('/contact', 'contact')->name('contact');