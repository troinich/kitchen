<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        /* public function run()
     {
         //create some fake data
          $post = new \App\Post([
             'title'=>"Pasta Carbonara",
             'content'=>"Spaghetti carbonara – en älskad favorit med rökt fläsk eller bacon och grädde! Lika bra till släktmiddagen som till fredagsmyset.",
              'category'=>'pasta'
          ]);
          $post->save();
         */


        public function run()
        {
            factory('App\Post', 300)->create();
        }
    }