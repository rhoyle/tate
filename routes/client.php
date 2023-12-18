<?php

// ------------------------------------------
//   Client / Dashboard PANEL ROUTES
//      middleware('role:1')->
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client;

Route::prefix('client')->name('client.')->group(function (){

    Route::get('dashboard', [Client\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::view('profile', 'profile')->name('profile');

});
