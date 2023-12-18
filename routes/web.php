<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

//    Route::view('dashboard', 'dashboard')->name('dashboard');

    include 'admin.php';
    include 'staff.php';
    include 'client.php';

});


//    Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
