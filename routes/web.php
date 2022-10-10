<?php


use App\Http\Controllers\CarController;
use App\Http\Controllers\redirectTo;
use App\Http\Controllers\ShortCodeController;
use App\Models\Car;
use App\Http\Controllers\OwnerController;
use App\Models\Owner;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\ImageController;
use App\Models\Image;

Route::get('cars', [CarController::class, 'index'])->name('cars.index');
Route::get('images', [ImageController::class, 'index'])->name('images.index');

Route::middleware(['auth','ShortCodeM','userType'])->group(function () {
    Route::resource('cars', CarController::class);
    Route::resource('images', ImageController::class);

});

Route::middleware( ['ShortCodeM', 'userType'])->group(function () {
    Route::resource('owners', OwnerController::class);
});
Route::middleware( ['userType'])->group(function () {
    Route::resource('shorts', ShortCodeController::class);
});
Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class]);

Route::get('/image/{name}',[CarController::class, 'display'])
    ->name('image.cars')
    ->middleware('auth');

Auth::routes();
