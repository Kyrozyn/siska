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
}
