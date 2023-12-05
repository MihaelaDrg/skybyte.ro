<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersAdmin\UsersAdmin;
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

Route::get('/data_miner', function (){return view('pma_sky4.php');});

Route::get('/', function () {
    return view('hub');
})->middleware(['auth', 'verified'])->name('hub');

Route::get('/users', [UsersAdmin::class, 'index'])->middleware(['auth', 'verified'])->name('users_list');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
