<?php

// Routes for allinoneaccessibility.
use Illuminate\Support\Facades\Route;

// Guard routes for allinoneaccessibility
Route::prefix('{guard}/allinoneaccessibility')->group(function () {
    Route::resource('allinoneaccessibility', 'allinoneaccessibilityResourceController');
});



// Public routes for allinoneaccessibility
Route::get('allinoneaccessibility', 'AllinoneaccessibilityPublicController@index');
Route::get('allinoneaccessibility/{slug}.html', 'AllinoneaccessibilityPublicController@show');
Route::get('allinoneaccessibility.htm', 'AllinoneaccessibilityPublicController@show');
