<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuTemuan extends Model
{
    use HasFactory;

    public function topiktemuan(){
        return $this->belongsTo(TopikTemuan::class);
    }
}
