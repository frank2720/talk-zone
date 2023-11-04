<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TalkController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*Route::middleware(['auth','verified'])->group(function (){
    Route::get('/talks', [TalkController::class, 'index'])->name('talks.index');
    Route::post('/talks',[TalkController::class, 'store'])->name('talks.store');
    Route::get('/talks', [TalkController::class, 'edit'])->name('talks.edit');
    Route::patch('/talks', [TalkController::class, 'update'])->name('talks.update');
});*/

Route::resource('talks',TalkController::class)
     ->only(['index', 'store', 'edit', 'update','destroy'])
     ->middleware(['auth','verified']);
require __DIR__.'/auth.php';
