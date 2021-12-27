<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\Role;
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> 58bf66beaa088fb90ea8e642324c228590655ea8

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
         \App\Models\User::factory(10)->create();
      
      
=======
      // \App\Models\User::factory(10)->create();
        User::create([
           'name'=>'Awni',
            'email'=>'Awni@gmail.com',
                'password'=>Hash::make('Awni@1998'),
            'role_id'=>2

        ]);




>>>>>>> 58bf66beaa088fb90ea8e642324c228590655ea8

    }
}
