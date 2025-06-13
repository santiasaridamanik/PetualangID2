<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationController;
use App\Models\Destination;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home route - tampilkan destinasi terbaru (maksimal 6)
Route::get('/', function () {
    $destinations = Destination::latest()->take(6)->get();
    return view('pages.home', compact('destinations'));
})->name('home');

// Halaman statis
Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/destinasi', function () {
    $destinations = Destination::latest()->paginate(12);
    return view('destinations.public', compact('destinations'));
})->name('destinasi');

Route::get('/kontak', [PagesController::class, 'kontak'])->name('kontak');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');


// Dashboard route, hanya untuk user yang sudah login & verified
Route::get('/dashboard', function () {
    $totalDestinations = Destination::count();
    return view('dashboard', compact('totalDestinations'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Group routes yang butuh authentication
Route::middleware('auth')->group(function () {
    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD Destinasi (admin only)
    Route::resource('destinations', DestinationController::class);
});

require __DIR__.'/auth.php';
