<?php

namespace App\Http\Controllers;

use App\Models\Temuan;
use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function front($topik_temuan_id)
    {
        $menutemuans = \App\Models\MenuTemuan::whereTopikTemuanId($topik_temuan_id)->where('menu_temuan_id',null)->get();
        return view('dashboard.temuan.laporan.front',compact('menutemuans'));
    }

    public function next($menu_temuan_id){
        $menutemuans = \App\Models\MenuTemuan::whereMenuTemuanId($menu_temuan_id)->get();
        return view('dashboard.temuan.laporan.front',compact('menutemuans'));
    }

    public function form($menu_temuan_id)
    {
        $menutemuans = \App\Models\MenuTemuan::where('id',$menu_temuan_id)->first();
        $pertanyaan_temuans = \App\Models\PertanyaanTemuan::where('menu_temuan_id',$menu_temuan_id)->get();
        return view('dashboard.temuan.laporan.form',compact('menutemuans','pertanyaan_temuans'));
    }

    public function tampil(){
        $temuans = Temuan::all();
        return view('dashboard.temuan.laporan.tampil',compact('temuans'));
    }
}
