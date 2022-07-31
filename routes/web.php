<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('users', function() {
    session(['msg' => 'world']);
    $users = User::latest('id')->get();

    return view('users.index', compact('users'));
})->middleware('auth');
