<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\ProfileController as BackendProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang-kami', [PageController::class, 'tentangkami'])->name('tentang-kami');
Route::get('/direktori-tenan', [PageController::class, 'direktoriTenan'])->name('direktori-tenan');
Route::get('/fasilitas', [PageController::class, 'fasilitas'])->name('fasilitas');

Route::get('/disewakan', [PageController::class, 'disewakan'])->name('disewakan');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin-profile', [AdminProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('admin-profile');
Route::post('profile/update', [AdminProfileController::class, 'updateProfile'])->middleware(['auth', 'verified'])->name('admin-profile.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
