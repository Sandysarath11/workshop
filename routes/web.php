<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/workshop', function () {
    return view('workshop');
})->name('workshop');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('workshops', WorkshopController::class);

    Route::resource('students', StudentController::class);

    Route::post('/students/{id}/send-certification', [StudentController::class, 'sendCertification'])->name('students.sendCertification');

});

require __DIR__.'/auth.php';
