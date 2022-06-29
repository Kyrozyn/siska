<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopikTemuan extends Controller
{
    public function index()
    {
        $topiktemuans = \App\Models\TopikTemuan::all();
        return view('dashboard.temuan.topiktemuan.view', compact('topiktemuans'));
    }

    public function create()
    {
        return view('dashboard.temuan.topiktemuan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_topik_temuan = $request->nama_topik_temuan;
        $icon_url = $request->file('icon_url');
        $icon_url_name = $icon_url->getClientOriginalName();
        $icon_url->move(public_path('images/topiktemuan'), $icon_url_name);
        $icon_url_path = 'images/topiktemuan/' . $icon_url_name;
        $topiktemuan = new \App\Models\TopikTemuan;
        $topiktemuan->nama_topik_temuan = $nama_topik_temuan;
        $topiktemuan->icon_url = $icon_url_path;
        $topiktemuan->save();
        return redirect('/topiktemuan');
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
        $topiktemuan = \App\Models\TopikTemuan::find($id);
        return view('dashboard.temuan.topiktemuan.edit', compact('topiktemuan'));
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
        $topiktemuan = \App\Models\TopikTemuan::find($id);
        $topiktemuan->nama_topik_temuan = $request->nama_topik_temuan;
        $icon_url = $request->file('icon_url');
        if ($icon_url) {
            $icon_url_name = $icon_url->getClientOriginalName();
            $icon_url->move(public_path('images/topiktemuan'), $icon_url_name);
            $icon_url_path = 'images/topiktemuan/' . $icon_url_name;
            $topiktemuan->icon_url = $icon_url_path;
        }
        $topiktemuan->save();
        return redirect('/topiktemuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topiktemuan = \App\Models\TopikTemuan::find($id);
        $topiktemuan->delete();
        return redirect('/topiktemuan');
    }
}
