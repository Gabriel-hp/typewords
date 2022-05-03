<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameRuntimeController extends Controller
{
    function index(Request $request) {
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
    }
}
