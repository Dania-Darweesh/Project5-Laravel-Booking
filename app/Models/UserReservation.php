<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReservation extends Model
{
    use HasFactory;
    function user(){
        return $this->belongsTo(User::class);
    }
    function room(){
        return $this->belongsTo(room::class);
    }
}
