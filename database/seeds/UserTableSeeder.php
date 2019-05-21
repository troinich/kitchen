<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin=Role::where('name', 'Admin')->first();
        $role_user=Role::where('name', 'User')->first();

        $user=new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_admin);

        $user=new User();
        $user->name = 'Natalia';
        $user->email = 'natalia@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
