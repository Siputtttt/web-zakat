<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\saranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\mustahikController;
use App\Http\Controllers\zakat;
use App\Models\saranModels;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/hitungzakat', function () {
//     return view('hitungzakat');
// });
// Route::get('/bayarzakat', function () {
//     return view('zakatbayar');
// });
// Route::get('/kontak', function () {
//     return view('kontak');
// });

Route::get('/', [UserController::class, 'index']);
Route::get('/hitungzakat', [UserController::class, 'hitungzakat']);
Route::get('/bayarzakat', [UserController::class, 'bayarzakat']);
Route::post('/simpanbayarzakat', [UserController::class, 'simpanbayarzakat']);
Route::get('/kontak', [UserController::class, 'kontak']);
Route::post('/simpansaran', [UserController::class, 'simpansaran']);

Route::resource('/dashboard', dashboardController::class)->middleware(['auth', 'verified']);

Route::middleware('auth', 'verified')->group(function () {
    Route::resource('/zakat', zakat::class)->middleware(['auth', 'verified']);
    Route::get('/zakatpenghasilan', [zakat::class, 'zakatpendapatan']);
    Route::get('/zakatfitrah', [zakat::class, 'zakatfitrah']);
});

Route::resource('/saran', saranController::class)->middleware(['auth', 'verified']);
Route::middleware('auth', 'verified')->group(function () {
    Route::resource('/mustahik', mustahikController::class)->middleware(['auth', 'verified']);
    Route::get('/mustahiknonaktif', [mustahikController::class, 'mustahiknonaktif']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
