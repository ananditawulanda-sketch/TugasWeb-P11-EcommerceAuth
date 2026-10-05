<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->get('/product/{product}/edit', function (\App\Models\Product $product) {
    abort_unless(auth()->user()->can('update', $product), 403);

    return 'Akses EDIT product berhasil!';
});

Route::middleware('auth')->delete('/product/{product}', function (\App\Models\Product $product) {
    abort_unless(auth()->user()->can('delete', $product), 403);

    return 'Akses DELETE product berhasil!';
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->get('/admin', function () {
    return 'Halaman Admin - Akses berhasil!';
});

Route::middleware(['auth', 'role:editor'])->get('/editor', function () {
    return 'Halaman Editor - Akses berhasil!';
});

Route::middleware(['auth', 'role:user'])->get('/user', function () {
    return 'Halaman User - Akses berhasil!';
});

Route::middleware('auth')->get('/test-delete/{product}', function (\App\Models\Product $product) {
    return view('test-delete', compact('product'));
});