<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffreController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/offres.offreindex', [OffreController::class, 'index'])->name('offre.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/offres', [OffreController::class, 'create'])->name('offre.create');
    Route::post('/offres', [OffreController::class, 'store'])->name('offre.store');
});

require __DIR__.'/auth.php';
