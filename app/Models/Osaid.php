<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Osaid extends Model
{
    use HasFactory;

    public function Hamdalla(){
        return $this->belongsTo(Hamdalla::class);
    }
}
