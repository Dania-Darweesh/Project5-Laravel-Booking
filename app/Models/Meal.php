<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    public function reviews(){
        return $this->hasMany(Review::class);
    }

    protected $fillable = [
        'name',
        'description',
        'price',
        'meal_img',
    ];
}
