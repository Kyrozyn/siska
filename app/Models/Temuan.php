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

    public function menutemuan(){
        return $this->belongsTo(MenuTemuan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
