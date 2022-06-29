<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Account extends Controller
{
    public function gettingStarted()
    {
        return view('account.gettingstarted');
    }

    public function login()
    {
        return view('account.login');
    }

    public function loginaction(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = \App\Models\User::where('email', $email)->first();
        if ($user) {
            if (\Hash::check($password, $user->password)) {
                \Auth::login($user);
                return redirect('/dashboard');
            } else {
                return redirect('/login')->with('error', 'Password salah');
            }
        } else {
            return redirect('/login')->with('error', 'Email tidak ditemukan');
        }
    }
}
