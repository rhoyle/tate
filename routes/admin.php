<?php

// ------------------------------------------
//   Admin / Dashboard PANEL ROUTES
//      middleware('role:3')->
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::prefix('admin')->name('admin.')->group(function (){

    Route::get('dashboard', [Admin\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('users', [Admin\UsersController::class, 'index'])
        ->name('users.index');

    Route::view('profile', 'profile')->name('profile');

});
