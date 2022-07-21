<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Temuan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads, LivewireAlert;
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

    public function submit(){
        $this->validate([
            'jawaban.*' => 'required',
            'file_upload.*' => 'required',
        ]);

        $temuan = new Temuan();
        $temuan->user_id =  \Auth::user()->id;
        $temuan->status = 'Menunggu Konfirmasi KTT';
        $temuan->save();
        foreach ($this->pertanyaan_temuans as $key => $pertanyaan_temuan) {
            $temuan->detail()->create([
                'pertanyaan_temuan_id' => $pertanyaan_temuan->id,
                'jawaban' => $this->jawaban[$pertanyaan_temuan->id],
            ]);
        }
        foreach ($this->file_upload as $key => $file) {
            $temuan->addMedia($file)->toMediaCollection('file');
        }

        $this->flash('success', 'Temuan berhasil dikirim, silahkan tunggu konfirmasi dari KTT',[],'/dashboard');
    }
}
