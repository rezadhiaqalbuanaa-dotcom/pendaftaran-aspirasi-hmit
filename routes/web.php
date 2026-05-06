<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AspirasiController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/pendaftaran', [FormController::class, 'index']);
Route::post('/pendaftaran', [FormController::class, 'store']);

Route::get('/aspirasi', [AspirasiController::class, 'index'])->middleware('auth');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->middleware('auth');
Route::get('/lihat-aspirasi', [AspirasiController::class, 'all'])->middleware('auth');
Route::delete('/aspirasi/{id}', [AspirasiController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';