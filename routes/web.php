<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Frontend\HomepageController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('/catalog', [\App\Http\Controllers\Frontend\CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/{slug}', [\App\Http\Controllers\Frontend\CatalogController::class, 'showslug'])->name('catalog.showslug');
Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'isAdmin','prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('sliders', \App\Http\Controllers\Admin\SliderController::class)->except('show');
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class)->except('show');
    Route::resource('catalogs', \App\Http\Controllers\Admin\CatalogController::class)->except('show');
    Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class)->except('show');
});
