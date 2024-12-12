<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        return view('user.login');
    }
    public function register() {
        return view('user.register');
    }

    public function registerAction(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required','unique:users,username'],
            'password' => ['required','confirmed'],
        ]);

        if (User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'avatar_url' => ''
        ])) {
            return redirect()->route('login')->with('status','User registration successful');
        }
        return back()->withErrors([
            'registration'=>'there was an issue with registration, try again',
        ]);
    }

    public function loginAction(Request $request) {
        // credentials is not used but with throw errors
        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            $user = Auth::user();

            // $request->session()->invalidate();
            $request->session()->regenerate();
            $user->online = true;
            $user->save();

            return redirect()->route('chat');
        }
        return back()->withErrors(['login'=>'login failed']);
    }

    public function logout(Request $request) {
        $user = Auth::user();
        $user->online = false;

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('login')->with([
                'status'=>'logged out.',
                ]);
    }
}
