<?php

namespace App\Http\Livewire\PertanyaanTemuan;

use App\Models\PertanyaanTemuan;
use Illuminate\Support\Facades\URL;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Add extends Component
{
    use LivewireAlert;
    public $nama_pertanyaan_temuan, $satuan, $type='text', $menu_temuan_id;

    public function mount($menu_temuan_id)
    {
        $this->menu_temuan_id = $menu_temuan_id;
    }

    public function render()
    {
        return view('livewire.pertanyaan-temuan.add');
    }

    public function insert()
    {
        $this->validate([
            'nama_pertanyaan_temuan' => 'required',
            'type' => 'required',
        ]);

        $pertanyaantemuan = new PertanyaanTemuan();
        $pertanyaantemuan->nama_pertanyaan_temuan = $this->nama_pertanyaan_temuan;
        $pertanyaantemuan->satuan = $this->satuan;
        $pertanyaantemuan->type = $this->type;
        $pertanyaantemuan->menu_temuan_id = $this->menu_temuan_id;
        $pertanyaantemuan->save();
        $this->flash('success', 'Data berhasil ditambahkan',[],URL::previous());
    }
}
