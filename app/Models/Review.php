<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_title',
        'review_body',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function meal(){
        return $this->belongsTo(Meal::class);
    }

}
