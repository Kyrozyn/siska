<?php

namespace App\Http\Livewire\Laporan;

use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $menutemuans, $pertanyaan_temuans;

    public $jawaban=[], $file_upload;

    public function mount($menutemuans, $pertanyaan_temuans){
        $this->menutemuans = $menutemuans;
        $this->pertanyaan_temuans = $pertanyaan_temuans;
    }
    public function render()
    {
        return view('livewire.laporan.form');
    }

    public function deleteFile($index)
    {
        unset($this->file_upload[$index]);
    }
}
