<?php

namespace Database\Seeders;

use App\Models\UserReservation;
use Illuminate\Database\Seeder;

class UserReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserReservation::create([
            'room_id'=>3,
            'user_id'=>1,
            'total_price'=>200,
            'number_of_days'=>5,
            'checkin_date'=>'2021-12-29',
            'checkout_date'=>'2022-01-02',
            'total_adults'=>2,

        ]);
    }
}
