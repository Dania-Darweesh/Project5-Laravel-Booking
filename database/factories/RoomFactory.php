<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'number_of_beds' => rand(1,4),
            'category_id'=>rand(1,6),
            'price' => 200,
            'has_balcony'=>$this->faker->boolean,
            'has_sea_view'=>$this->faker->boolean,
            'status'=>$this->faker->boolean,
            'room_img'=>$this->faker->imageUrl,
            'room_description'=>$this->faker->text(150)
        ];
    }
}
