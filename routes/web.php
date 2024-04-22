<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use App\Models\Person;

Route::get('/add', function () {
    return view('addPerson');
});
Route::controller(PersonController::class)->group(function () {
Route::post('/people', 'store')->name('people.store');
});

Route::middleware('auth')->group(function () {
Route::controller(PersonController::class)->group(function () {
    Route::get('dashboard/people', 'index')->name('people.index');
    Route::post('/people/{person}/deactivate', 'deactivate')->name('people.deactivate');
    Route::post('/people/{person}/activate', 'activate')->name('people.activate');
});
});
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

require __DIR__.'/auth.php';


