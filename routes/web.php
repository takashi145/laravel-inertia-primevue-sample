<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return Inertia::render('Welcome');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/home', function() {
        return Inertia::render('Home');
    });
    Route::get('/user/{user}', [UserController::class, 'index']);
    Route::resource('posts', PostController::class);
});

