<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProjectController;  
use App\Http\Controllers\AdminServiceController;  

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

        Route::resource('projects', AdminProjectController::class);
        Route::resource('services', AdminServiceController::class);
    });

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