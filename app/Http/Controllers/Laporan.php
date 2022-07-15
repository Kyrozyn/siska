<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function front($topik_temuan_id)
    {
        $menutemuans = \App\Models\MenuTemuan::whereTopikTemuanId($topik_temuan_id)->get();
        return view('dashboard.temuan.laporan.front',compact('menutemuans'));
    }
}
