<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function signup(Request $request) {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'birth_date' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'birth_date' => $request->birth_date,
        ]);
        
        return redirect('/');
    }

    function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', '=', $request->username)->first();
        
        if(!$user) {
            return 'User not found';
        }

        if($user->password !== $request->password) {
            return 'Invalid password';
        }

        $user->last_login = Carbon::now();
        $user->save();

        return redirect('/');
    }
}
