<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Temuan extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function detail(){
        return $this->hasMany(TemuanDetail::class);
    }
}
