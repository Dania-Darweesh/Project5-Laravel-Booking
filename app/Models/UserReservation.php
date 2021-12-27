<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReservation extends Model
{
    protected $primaryKey = "id" ;// default it look for id
    use HasFactory;
    protected $fillable = [
        'room_id',
        'user_id',
        'total_price',
        'number_of_days',
        'checkin_date',
        'checkout_date',
        'total_adults',
    ];
    function user(){
        return $this->belongsTo(User::class);
    }
    function room(){
        return $this->belongsTo(room::class);
    }
}
