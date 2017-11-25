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
        $role1->display_name = 'administrator';
        $role1->save();

        $role2 = new Role();
        $role2->name = 'pengguna';
        $role2->display_name = 'pengguna';
        $role2->save();

        $role3 = new Role();
        $role3->name = 'operator';
        $role3->display_name = 'operator';
        $role3->save();
        
        $user = new User();
        $user->name = 'Administrator';
        $user->email = 'adminis@adminx.com';
        $user->username = 'admin';
        $user->password = bcrypt('87654321');
        $user->save();
        $user->roles()->attach($role1->id);

        $user2 = new User();
        $user2->name = 'pengguna';
        $user2->email = 'pengguna@penggunax.com';
        $user2->username = 'pengguna';
        $user2->password = bcrypt('87654321');
        $user2->save();
        $user2->roles()->attach($role2->id);

        $user3 = new User();
        $user3->name = 'operator';
        $user3->email = 'operator@operatorx.com';
        $user3->username = 'operator';
        $user3->password = bcrypt('87654321');
        $user3->designation = 'Layanan';
        $user3->save();
        $user3->roles()->attach($role3->id);
    }
}
