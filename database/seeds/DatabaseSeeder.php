<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //php $this->call(PostTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);


    }
}