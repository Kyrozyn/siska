<?php

namespace App\Http\Livewire\MenuTemuan;

use Illuminate\Support\Facades\URL;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Add extends Component
{
    use LivewireAlert;
    public $nama_menu_temuan,$menu_temuan_id=null,$topik_temuan_id,$punya_submenu=false;

    public function mount($topik_temuan_id,$menu_temuan_id=null)
    {
        $this->topik_temuan_id = $topik_temuan_id;
        if(!$menu_temuan_id == null){
            $this->menu_temuan_id = $menu_temuan_id;
        }
    }

    public function render()
    {
        return view('livewire.menu-temuan.add');
    }

    public function insert()
    {
        $this->validate([
            'nama_menu_temuan' => 'required',
        ]);
        $menu_temuan = new \App\Models\MenuTemuan();
        $menu_temuan->nama_menu_temuan = $this->nama_menu_temuan;
        $menu_temuan->topik_temuan_id = $this->topik_temuan_id;
        $menu_temuan->punya_submenu = $this->punya_submenu;
        $menu_temuan->menu_temuan_id = $this->menu_temuan_id;
        $menu_temuan->save();
        $this->flash('success', 'Berhasil menambahkan menu temuan',[],URL::previous());
    }
}
