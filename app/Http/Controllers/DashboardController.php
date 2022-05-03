<?php

namespace App\Http\Controllers;

use App\Models\DefaultGameLevels;
use App\Models\GameLevels;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $default_game_stts = DefaultGameLevels::all();
        $custom_game_stts = GameLevels::all();
        return view('dashboard', [
            'default_game_stts' => $default_game_stts,
            'custom_game_stts' => $custom_game_stts
        ]);
    }
}
