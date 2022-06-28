<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }
}
