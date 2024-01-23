<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'guests'], function () {
    Route::get('/', [GuestController::class, 'index'])->name('guests.index');
    Route::get('/create', [GuestController::class, 'create'])->name('guests.create');
    Route::post('/', [GuestController::class, 'store'])->name('guests.store');
    Route::get('/{id}', [GuestController::class, 'show'])->name('guests.show');
    Route::get('/{id}/edit', [GuestController::class, 'edit'])->name('guests.edit');
    Route::put('/{guest}', [GuestController::class, 'update'])->name('guests.update');
    Route::delete('/{id}', [GuestController::class, 'destroy'])->name('guests.destroy');

    // Rutas personalizadas
    Route::get('/guest/search', [GuestController::class, 'searchByName'])->name('guest.searchByName');
    Route::get('/guest/filter', [GuestController::class, 'filterByBirthdate'])->name('guest.filterByBirthdate');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
