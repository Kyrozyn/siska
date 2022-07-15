<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanTemuan extends Controller
{
    public function index($menu_temuan_id)
    {
        $pertanyaantemuans = \App\Models\PertanyaanTemuan::where('menu_temuan_id', $menu_temuan_id)->get();
        return view('dashboard.temuan.pertanyaantemuan.view', compact('pertanyaantemuans','menu_temuan_id'));
    }

    public function create($menu_temuan_id)
    {
        $menu_temuan = \App\Models\MenuTemuan::find($menu_temuan_id);
        return view('dashboard.temuan.pertanyaantemuan.add', compact('menu_temuan','menu_temuan_id'));
    }
}
