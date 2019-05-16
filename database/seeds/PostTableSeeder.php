<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create some fake data
         $post = new \App\Post([
            'title'=>"First Seed",
            'content'=>"First Seed Content"
         ]);
         $post->save();

         $post = new \App\Post([
             'title'=>"Second Seed",
            'content'=>"Second Seed Content"
         ]);
         $post->save();

    }
}
