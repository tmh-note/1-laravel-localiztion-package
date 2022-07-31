<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;

Route::get('welcome', function() {
    return view('welcome');
});
