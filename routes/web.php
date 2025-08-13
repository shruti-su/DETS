<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::resource('items', App\Http\Controllers\ItemController::class)->middleware(['auth']);
Route::resource('itemsgroup', App\Http\Controllers\ItemGroupController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
