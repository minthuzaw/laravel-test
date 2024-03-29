<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lazy-load', function () {
    return view('lazy-load-image');
});

Route::post('/check-payment', [PaymentController::class, 'checkPayment'])->name('check-payment');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('tasks', TaskController::class)
        ->only(['index'])
        ->middleware('features:task-management');
});

require __DIR__.'/auth.php';

Route::get('/qr', function () {
    return view('qr-generator');
})->middleware(['auth'])->name('qr');
