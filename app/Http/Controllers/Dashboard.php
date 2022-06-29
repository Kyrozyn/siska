<?php

namespace App\Http\Controllers;

use App\Models\TopikTemuan;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function home()
    {
        $topiktemuans = TopikTemuan::all();
        return view('dashboard.home',compact('topiktemuans'));
    }

    public function settings()
    {
        return view('dashboard.settings');
    }
}
