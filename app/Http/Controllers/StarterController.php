<?php

namespace App\Http\Controllers;

use App\Models\DefaultGameLevels;
use App\Models\GameLevels;
use Illuminate\Http\Request;

class StarterController extends Controller
{
    function index($setting_type, $setting_id) {
        $game_setting = [];

        if($setting_type === 'default') {
            $game_setting = DefaultGameLevels::findOrFail($setting_id);
        }
        
        if($setting_type === 'custom') {
            $game_setting = GameLevels::findOrFail($setting_id);
        }

        return view('starter', [
            'setting_type' => $setting_type,
            'game_setting' => $game_setting,
        ]);
    }
}
