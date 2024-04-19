<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Models\Person;

Route::get('/', function () {
    return view('addPerson');
});
Route::controller(PersonController::class)->group(function () {
    Route::get('admin/people', 'index')->name('people.index');
    Route::post('/people', 'store')->name('people.store');
    Route::post('/people/{person}/deactivate', 'deactivate')->name('people.deactivate');
    Route::post('/people/{person}/activate', 'activate')->name('people.activate');
});


