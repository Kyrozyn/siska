<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuTemuan extends Controller
{
    public function index($topik_temuan_id)
    {
        $menu_temuans = \App\Models\MenuTemuan::where('topik_temuan_id',(int)$topik_temuan_id)->get();
        return view('dashboard.temuan.menutemuan.view', compact('menu_temuans','topik_temuan_id'));
    }

    public function index_menu($topik_temuan_id,$menu_temuan_id)
    {
        $menu_temuans = \App\Models\MenuTemuan::where('topik_temuan_id',(int)$topik_temuan_id)->where('menu_temuan_id',(int)$menu_temuan_id)->get();
        return view('dashboard.temuan.menutemuan.view', compact('menu_temuans','topik_temuan_id','menu_temuan_id'));
    }


    public function create($topik_temuan_id,$menu_temuan_id=null)
    {
        return view('dashboard.temuan.menutemuan.add', compact('topik_temuan_id','menu_temuan_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menutemuan = \App\Models\MenuTemuan::whereId($id)->first();
        $menutemuan->delete();
        return redirect()->back();
    }
}
