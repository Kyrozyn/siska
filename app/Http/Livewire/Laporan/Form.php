<?php

namespace App\Http\Livewire\Laporan;

use Livewire\Component;

class Form extends Component
{
    public $menutemuans, $pertanyaan_temuans;

    public function mount($menutemuans, $pertanyaan_temuans){
        $this->menutemuans = $menutemuans;
        $this->pertanyaan_temuans = $pertanyaan_temuans;
    }
    public function render()
    {
        return view('livewire.laporan.form');
    }
}
