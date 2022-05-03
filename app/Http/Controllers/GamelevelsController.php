<?php

namespace App\Http\Controllers;

use App\Models\GameLevels;
use Illuminate\Http\Request;

class GamelevelsController extends Controller
{
    function index() {
        return view('gamelevels');
    }

    function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'gm' => 'required',
            'sec' => 'required',
            'msec' => 'required',
            'mwl' => 'required'
        ]);
    
        GameLevels::create([
            'name' =>  $request->name,
            'game_mode' =>  $request->gm,
            'seconds' =>  $request->sec,
            'miliseconds' =>  $request->msec,
            'max_words_len' =>  $request->mwl
        ]);
    
        return redirect('/');
    }

    function destroy($game_setting_id) {
        GameLevels::destroy($game_setting_id);
        return redirect('/dashboard');
    }
}
