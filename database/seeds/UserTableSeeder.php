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
        $role_user=Role::where('name', 'User')->first();
        $role_author=Role::where('name', 'Author')->first();
        $role_admin=Role::where('name', 'Admin')->first();

        $user=new User();
        $user->name = 'troinich';
        $user->email = 'troinich@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_user);

        $user=new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_admin);

        $user=new User();
        $user->name = 'Percy';
        $user->email = 'percy@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_author);
    }
}
