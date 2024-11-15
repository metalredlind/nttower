<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BeritaController;
use App\Http\Controllers\Backend\BeritaVideoController;
use App\Http\Controllers\Backend\DisewakanController;
use App\Http\Controllers\Backend\DisewakanImageGalleryController;
use App\Http\Controllers\Backend\FasilitasController;
use App\Http\Controllers\Backend\ProfileController as BackendProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//frontend pages
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang-kami', [PageController::class, 'tentangkami'])->name('tentang-kami');
Route::get('/direktori-tenan', [PageController::class, 'direktoriTenan'])->name('direktori-tenan');
Route::get('/fasilitas', [PageController::class, 'fasilitas'])->name('fasilitas');

Route::get('/disewakan', [PageController::class, 'disewakan'])->name('disewakan');

Route::get('/disewakan-detail/{slug}', [PageController::class, 'disewakanDetail'])->name('disewakan-detail');

Route::get('/peraturan-regulasi', [PageController::class, 'peraturanRegulasi'])->name('peraturan-regulasi');

Route::get('/berita', [PageController::class, 'beritaWhatson'])->name('berita');
Route::get('/berita-detail/{slug}', [PageController::class, 'beritaWhatsonDetail'])->name('berita-detail');

Route::get('/berita-video', [PageController::class, 'beritaVideo'])->name('berita-video');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/get-lantai-options', [PageController::class, 'getLantaiOptions']);


Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin-profile', [AdminProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('admin-profile');
Route::post('profile/update', [AdminProfileController::class, 'updateProfile'])->middleware(['auth', 'verified'])->name('admin-profile.update');
Route::post('profile/update/password', [AdminProfileController::class, 'updatePassword'])->middleware(['auth', 'verified'])->name('admin-profile.password.update');

//disewakan routes
Route::resource('admin-disewakan', DisewakanController::class)->middleware(['auth', 'verified']);
Route::resource('admin-disewakan-image-gallery', DisewakanImageGalleryController::class)->middleware(['auth', 'verified']);

//berita routes
Route::resource('admin-berita', BeritaController::class)->middleware(['auth', 'verified']);
//berita-video routes
Route::resource('admin-berita-video', BeritaVideoController::class)->middleware(['auth', 'verified']);

//admin fasilitas routes
Route::resource('admin-fasilitas', FasilitasController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
