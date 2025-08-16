<?php

use Illuminate\Support\Facades\Route;

// Middleware configuration for role-based access
Route::aliasMiddleware('role', \App\Http\Middleware\ManageMiddleware::class);

Route::view('/', 'welcome');

Route::view('userdashboard', 'dashboard.userdashboard')
    ->middleware(['auth', 'verified'])
    ->name('userdashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('expenditures', App\Http\Controllers\ExpenditureController::class)->middleware(['auth']);
Route::get('itemgroups/{id}/add-item', [App\Http\Controllers\ItemGroupController::class, 'getItemGroups'])
    ->name('itemgroups.add-item')
    ->middleware(['auth']);

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::view('admindashboard', 'dashboard.admindashboard')->name('admindashboard');
        Route::resource('items', App\Http\Controllers\ItemController::class);
        Route::resource('itemgroups', App\Http\Controllers\ItemGroupController::class);
    });
    Route::get('show-expenditure/{id}/change_expenditure', [App\Http\Controllers\ExpenditureController::class, 'change_expenditure'])
        ->name('expenditures.change_expenditure');
    Route::get('change-expenditure/{expenditure_id}/edit_expenditure', [App\Http\Controllers\ExpenditureController::class, 'edit_expenditure'])
        ->name('expenditures.edit_expenditure');
});

require __DIR__.'/auth.php';
