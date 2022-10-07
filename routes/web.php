<?php


use App\Http\Controllers\CarController;
use App\Http\Controllers\redirectTo;
use App\Http\Controllers\ShortCodeController;
use App\Models\Car;
use App\Http\Controllers\OwnerController;
use App\Models\Owner;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('cars', [CarController::class, 'index'])->name('cars.index');

Route::middleware(['auth','ShortCodeM','userType'])->group(function () {
    Route::resource('cars', CarController::class);

});

Route::middleware( ['ShortCodeM', 'userType'])->group(function () {
    Route::resource('owners', OwnerController::class);
});
Route::middleware( ['userType'])->group(function () {
    Route::resource('shorts', ShortCodeController::class);
});
Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class]);

Auth::routes();
