<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('/admin', function () {
        return "Panel Admin";
    });
    
    Route::get('/admin/movies', [MovieController::class, 'index']);

    Route::post('/admin/movies', [MovieController::class, 'store']);

    Route::get('/admin/movies/create', [MovieController::class, 'create']);

    Route::get('/admin/movies/{id}/edit', [MovieController::class, 'edit']);

    Route::put('/admin/movies/{id}', [MovieController::class, 'update']);

    Route::delete('/admin/movies/{id}', [MovieController::class, 'destroy']);
    
});

require __DIR__.'/auth.php';
