<?php

namespace App\Http\Livewire\Laporan;

use App\Models\Temuan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Detail extends Component
{
    use LivewireAlert;
    public $temuan;
    public $followup;

    public function mount($temuan)
    {
        $this->temuan = $temuan;
    }

    public function render()
    {
        return view('livewire.laporan.detail');
    }

    public function terima(){
        if ($this->temuan->status == 'Menunggu Konfirmasi KTT') {
            $this->temuan->status = "Menunggu Konfirmasi Manager";
            $this->temuan->followup_sebelum_tanggal = $this->followup;
            $this->temuan->save();
        }
        elseif($this->temuan->status == 'Menunggu Konfirmasi Manager'){
            $this->temuan->status = "Diterima, Menunggu Follow Up Supervisor";
            $this->temuan->followup_sebelum_tanggal = $this->followup;
            $this->temuan->save();
        }
        $this->alert('success', 'Temuan berhasil diterima');
    }

    public function tolak(){
        if ($this->temuan->status == 'Menunggu Konfirmasi KTT') {
            $this->temuan->status = 'Ditolak';
            $this->temuan->save();
        }
        elseif($this->temuan->status == 'Menunggu Konfirmasi Manager'){
            $this->temuan->status = 'Ditolak';
            $this->temuan->save();
        }
        $this->alert('success', 'Temuan berhasil ditolak');

    }
}
