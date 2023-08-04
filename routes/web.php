<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
	

	
	
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/samples/create', [SampleController::class, 'create'])->name('samples.create');
    Route::post('/samples', [SampleController::class, 'store'])->name('samples.store');
	
	Route::get('/samples/{sample}/edit', [SampleController::class, 'edit'])->name('samples.edit');
    Route::put('/samples/{sample}', [SampleController::class, 'update'])->name('samples.update');
    Route::delete('/samples/{sample}', [SampleController::class, 'destroy'])->name('samples.destroy');

	
	
});


/* end added */

Route::get('/samples', [SampleController::class, 'index'])->name('samples.index');

require __DIR__.'/auth.php';
