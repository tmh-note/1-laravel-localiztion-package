<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;

Route::middleware('lang')->group(function() {
    Route::get('/', [PageController::class, 'home']);
    Route::get('about', [PageController::class, 'about']);
    Route::get('lang/{lang}', [LocalizationController::class, 'index']);
});
