<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function signup_view() {
        return view('signup');
    }

    function login_view() {
        return view('login');
    }

    function signup(Request $request) {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'birth_date' => 'required',
            'password_confirm' => 'required'
        ]);

        if($request->password_confirm !== $request->password) {
            return 'As duas senhas precisam ser iguais.';
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'birth_date' => $request->birth_date,
        ]);
        
        return redirect('/dashboard');
    }

    function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', '=', $request->username)->first();
        
        if(!$user) {
            $user = User::where('email', '=', $request->username)->first();
            if(!$user) {
                return 'User not found';
            }
        }

        if($user->password !== $request->password) {
            return 'Invalid password';
        }

        $user->last_login = Carbon::now();
        $user->save();

        return redirect('/dashboard');
    }
}
