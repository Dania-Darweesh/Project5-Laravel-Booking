<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Category::create([
            'category_name'=>'King Room',
            'category_img'=>'images/room-6.jpg',

        ]);
        Category::create([
            'category_name'=>'Suite Room',
            'category_img'=>'images/room-1.jpg',

        ]);
        Category::create([
            'category_name'=>'Family Room',
            'category_img'=>'images/room-2.jpg',

        ]);
        Category::create([
            'category_name'=>'Deluxe Room',
            'category_img'=>'images/room-3.jpg',

        ]);
        Category::create([
            'category_name'=>'Luxury Room',
            'category_img'=>'images/room-4.jpg',

        ]);
        Category::create([
            'category_name'=>'Superior Room',
            'category_img'=>'images/room-5.jpg',

        ]);
    }
}
