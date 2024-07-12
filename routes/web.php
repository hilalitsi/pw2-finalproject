<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/car', [FrontendController::class, 'car'])->name('car');
Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/cars', CarController::class);
    Route::resource('/loans', LoanController::class);
    Route::resource('/types', TypeController::class);
    Route::resource('/users', UserController::class);
});


require __DIR__.'/auth.php';
