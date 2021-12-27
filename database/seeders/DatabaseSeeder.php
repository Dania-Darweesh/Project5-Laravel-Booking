<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\User::factory(10)->create();
        //Admin User
       /* User::create([
           'name'=>'Awni',
            'email'=>'Awni@gmail.com',
                'password'=>Hash::make('Awni@1998'),
            'role_id'=>2

        ]);*/

        //Super Admin User
        User::create([
            'name'=>'Osaid',
            'email'=>'Osaid@gmail.com',
            'password'=>Hash::make('Osaid@1999'),
            'role_id'=>3

        ]);
//        User::create([
//            'name'=>'Osaid',
//            'email'=>'Osaid@gmail.com',
//            'password'=>Hash::make('Osaid@1999'),
//            'role_id'=>2
//
//        ]);
        User::create([
            'name'=>'Leen',
             'email'=>'leen@gmail.com',
                 'password'=>Hash::make('Leen23@2000'),
             'role_id'=>1

         ]);
        // User::create([
        //     'name'=>'Osaid',
        //     'email'=>'Osaidgh@gmail.com',
        //     'password'=>Hash::make('Osaid@1999'),
        //     'role_id'=>3

        // ]);
        // User::create([
        //     'name'=>'Osaid',
        //     'email'=>'Osaid@gmail.com',
        //     'password'=>Hash::make('Osaid@1999'),
        //     'role_id'=>2

        // ]);
        // User::create([
        //     'name'=>'Leen',
        //      'email'=>'leen@gmail.com',
        //          'password'=>Hash::make('Leen23@2000'),
        //      'role_id'=>1

        //  ]);






    }
}
