<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        
   Role::create([
            'name'=>"user",
 
         ]);
         Role::create([
            'name'=>"admin",
 
         ]);
         Role::create([
            'name'=>"super_admin",
 
         ]);    }
=======
        Role::create([
           'name'=>"user",

        ]);
        Role::create([
           'name'=>"admin",

        ]);
        Role::create([
           'name'=>"super_admin",

        ]);
    }
>>>>>>> 58bf66beaa088fb90ea8e642324c228590655ea8
}
