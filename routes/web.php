<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', fn () => view('dash.dashboard'))->name('dash.dashboard');
Route::get('/user', fn () => view('user'))->name('user');
Route::get('/locked', fn () => view('user-lock'))->name('user-lock');
Route::get('/mutation', fn () => view('user-mutation'))->name('user-mutation');
Route::get('/activation', fn () => view('user-activation'))->name('user-activation');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Route::get('/user', [ProfileController::class, 'user'])->name('user');
});

require __DIR__.'/auth.php';
