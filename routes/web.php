<?php

use App\Models\DefaultGameSettings;
use App\Models\GameSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $default_game_stts = DefaultGameSettings::all();
    $custom_game_stts = GameSettings::all();
    return view('home', [
        'default_game_stts' => $default_game_stts,
        'custom_game_stts' => $custom_game_stts
    ]);
});

Route::get('/gamemode', function () {
    return view('gamemode');
});

Route::post('/gamemode', function(Request $request) {
    $request->validate([
        'name' => 'required',
        'gm' => 'required',
        'sec' => 'required',
        'msec' => 'required',
        'mwl' => 'required'
    ]);

    GameSettings::create([
        'name' =>  $request->name,
        'game_mode' =>  $request->gm,
        'seconds' =>  $request->sec,
        'miliseconds' =>  $request->msec,
        'max_words_len' =>  $request->mwl
    ]);

    return redirect('/');
});

Route::post('/gamemode/delete/{game_setting_id}', function($game_setting_id) {
    GameSettings::destroy($game_setting_id);
    return redirect('/');
});

Route::get('/starter/{setting_type}/{setting_id}', function ($setting_type, $setting_id) {
    $game_setting = [];

    if($setting_type === 'default') {
        $game_setting = DefaultGameSettings::findOrFail($setting_id);
    }
    
    if($setting_type === 'custom') {
        $game_setting = GameSettings::findOrFail($setting_id);
    }

    return view('starter', [
        'setting_type' => $setting_type,
        'game_setting' => $game_setting,
    ]);
});

Route::get('/game', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'gm' => 'required',
        'sec' => 'required',
        'msec' => 'required',
        'mwl' => 'required'
    ]);

    return view('game', [
        'name' => $request->name,
        'game_settings' => json_encode([
            'name' => $request->name,
            'game_mode' => $request->gm,
            'seconds' => $request->sec,
            'miliseconds' => $request->msec,
            'max_words_len' => $request->mwl
        ])
    ]);
});

