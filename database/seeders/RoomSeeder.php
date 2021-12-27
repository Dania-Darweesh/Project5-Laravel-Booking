<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\room;


use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\room::factory(10)->create(); {

            Room::create([
                'category_id'    => 1,
                'number_of_beds' => 1,
                'price'          => 120,
                'has_balcony'    => 1,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "single-balcony-seaview.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 1,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "king-nobalcony-no seaview.jpg",
                'room_description' => "1 large double bed",
            ]);

            Room::create([
                'category_id'    => 1,
                'number_of_beds' => 1,
                'price'          => 120,
                'has_balcony'    => 1,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "kingSizewithbalconyand seaview.jpg",
                'room_description' => "1 large double bed ",
            ]);
            Room::create([
                'category_id'    => 1,
                'number_of_beds' => 1,
                'price'          => 120,
                'has_balcony'    => 1,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "balcony1.jpeg",
                'room_description' => "1 large double bed ",
            ]);
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-6.jpg",
                'room_description' => "1 large double bed",
            ]);
            // 333333333333333333333333333333333333333 suite room 
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "couble-nobalcony-seaview.jpg",
                'room_description' => "1 large double bed ",
            ]);
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "couple-balcony-no sea view .jpg",
                'room_description' => "1 large double bed ",
            ]);
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 1,
                'price'          => 120,
                'has_balcony'    => 1,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "couple-balcony-seaview.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-1.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-2.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-3.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-4.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 2,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-5.jpg",
                'room_description' => "1 large double bed",
            ]);

            // familllllllllllllly room 
            Room::create([
                'category_id'    => 3,
                'number_of_beds' => 4,
                'price'          => 120,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "familyno.jpg",
                'room_description' => "4 large single bed ",
            ]);
            Room::create([
                'category_id'    => 3,
                'number_of_beds' => 4,
                'price'          => 120,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "familynoooe.jpg",
                'room_description' => "4 large single bed ",
            ]);
            Room::create([
                'category_id'    => 3,
                'number_of_beds' => 3,
                'price'          => 120,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "family1-3bed.jfif",
                'room_description' => "4 large single bed ",
            ]);
            Room::create([
                'category_id'    => 3,
                'number_of_beds' => 3,
                'price'          => 120,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "family2-3bed.jfif",
                'room_description' => "4 large single bed ",
            ]);
            Room::create([
                'category_id'    => 3,
                'number_of_beds' => 3,
                'price'          => 150,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "family3-3bed-b.jfif",
                'room_description' => "4 large single bed ",
            ]);
            Room::create([
                'category_id'    => 3,
                'number_of_beds' => 4,
                'price'          => 150,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "family5-4bed.jpg",
                'room_description' => "4 large single bed ",
            ]);

            // 5555555555555555 duelex

            Room::create([
                'category_id'    => 4,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "couble-nobalcony-seaview.jpg",
                'room_description' => "Deluxe Bungalows ",
            ]);
            Room::create([
                'category_id'    => 4,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "couple-balcony-no sea view .jpg",
                'room_description' => "Deluxe Bungalows  ",
            ]);
            Room::create([
                'category_id'    => 4,
                'number_of_beds' => 1,
                'price'          => 120,
                'has_balcony'    => 1,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "couple-balcony-seaview.jpg",
                'room_description' => "Deluxe Bungalows ",
            ]);
            Room::create([
                'category_id'    => 4,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-1.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 4,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-2.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 4,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-3.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 4,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-4.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 4,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-5.jpg",
                'room_description' => "1 large double bed",
            ]);
            //////////////////////////luxery room
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 1,
                'price'          => 30,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "luxery no.jpg",
                'room_description' => "luxery Bungalows ",
            ]);
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "luxeryno.jpg",
                'room_description' => "luxery Bungalows ",
            ]);
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "luxeryno.jpg",
                'room_description' => "luxery Bungalows ",
            ]);
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "couble-nobalcony-seaview.jpg",
                'room_description' => "Deluxe Bungalows ",
            ]);
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "couple-balcony-no sea view .jpg",
                'room_description' => "Deluxe Bungalows  ",
            ]);
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 1,
                'price'          => 120,
                'has_balcony'    => 1,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "balcony1.jpeg",
                'room_description' => "1 large double bed ",
            ]);
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-6.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-4.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 5,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-5.jpg",
                'room_description' => "1 large double bed",
            ]);
            /////Superior Room
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 1,
                'price'          => 30,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "luxery no.jpg",
                'room_description' => "luxery Bungalows ",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "luxeryno.jpg",
                'room_description' => "luxery Bungalows ",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "luxeryno.jpg",
                'room_description' => "luxery Bungalows ",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "couble-nobalcony-seaview.jpg",
                'room_description' => "Deluxe Bungalows ",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "couple-balcony-no sea view .jpg",
                'room_description' => "Deluxe Bungalows  ",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 1,
                'price'          => 120,
                'has_balcony'    => 1,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "balcony1.jpeg",
                'room_description' => "1 large double bed ",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 1,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-6.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-4.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 1,
                'price'          => 40,
                'has_balcony'    => 0,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "room-5.jpg",
                'room_description' => "1 large double bed",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 0,
                'has_sea_view'   => 1,
                'status'         => 0,
                'room_img'       => "couble-nobalcony-seaview.jpg",
                'room_description' => "Deluxe Bungalows ",
            ]);
            Room::create([
                'category_id'    => 6,
                'number_of_beds' => 2,
                'price'          => 60,
                'has_balcony'    => 1,
                'has_sea_view'   => 0,
                'status'         => 0,
                'room_img'       => "couple-balcony-no sea view .jpg",
                'room_description' => "Deluxe Bungalows  ",
            ]);
        }
    }
}
