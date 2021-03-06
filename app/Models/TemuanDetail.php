<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemuanDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pertanyaan_temuan()
    {
        return $this->belongsTo(PertanyaanTemuan::class);
    }

    public function temuan()
    {
        return $this->belongsTo(Temuan::class);
    }
}
