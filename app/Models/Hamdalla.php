<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamdalla extends Model
{
    use HasFactory;

    public function Osaid(){
        return $this->hasMany(Osaid::class);
    }
}
