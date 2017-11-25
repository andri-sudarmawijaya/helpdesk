php artisan db:seedphp artisan db:seed<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = new Role();
        $role1->name = 'admin';
        $role1->display_name = 'admin';
        $role1->save();

        $role2 = new Role();
        $role2->name = 'client';
        $role2->display_name = 'client';
        $role2->save();

        $role3 = new Role();
        $role3->name = 'staff';
        $role3->display_name = 'staff';
        $role3->save();
        
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@email.com';
        $user->username = 'admin';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role1->id);

        $user2 = new User();
        $user2->name = 'client';
        $user2->email = 'client@email.com';
        $user2->username = 'client';
        $user2->password = bcrypt('123456');
        $user2->save();
        $user2->roles()->attach($role2->id);

        $user3 = new User();
        $user3->name = 'staff';
        $user3->email = 'staff@email.com';
        $user3->username = 'staff';
        $user3->password = bcrypt('123456');
        $user3->designation = 'Support Engineer';
        $user3->save();
        $user3->roles()->attach($role3->id);
    }
}
