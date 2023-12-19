<?php

// ------------------------------------------
//   Staff / Dashboard PANEL ROUTES
//      middleware('role:2')->
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staff;

Route::prefix('staff')->name('staff.')->group(function (){

    Route::get('dashboard', [staff\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::view('profile', 'staff.profile')->name('profile');

});
