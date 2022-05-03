<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GamelevelsController;
use App\Http\Controllers\GameRuntimeController;
use App\Http\Controllers\StarterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/login', [UserController::class, 'login_view']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/signup', [UserController::class, 'signup_view']);
Route::post('/signup', [UserController::class, 'signup']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/gamelevels', [GamelevelsController::class, 'index']);
Route::post('/gamelevels', [GamelevelsController::class, 'store']);
Route::post('/gamelevels/delete/{game_setting_id}', [GamelevelsController::class, 'destroy']);

Route::get('/starter/{setting_type}/{setting_id}', [StarterController::class, 'index']);

Route::get('/game', [GameRuntimeController::class, 'index']);

