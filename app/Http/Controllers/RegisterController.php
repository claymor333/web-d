<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required','unique:users,username'],
            'password' => ['required','confirmed'],
        ]);

        if (User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'avatar' => ''
        ])) {
            return redirect()->route('login');
        }
        return back()->withErrors([
            'registration'=>'there was an issue with registration, try again',
        ]);
    }
}
