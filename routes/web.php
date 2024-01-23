<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::resource('guests', GuestController::class);
Route::get('/guest/search', [GuestController::class, 'searchByName'])->name('guest.searchByName');
Route::get('/guest/filter', [GuestController::class, 'filterByBirthdate'])->name('guest.filterByBirthdate');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
