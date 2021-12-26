<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'price' => 50,
            'description' =>$this->faker->text ,
            'meal_img' =>$this->faker->imageUrl,
        ];
    }
}
