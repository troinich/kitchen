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

          $post = new \App\Post([
              'title'=>"Chicken Tikka Masala",
             'content'=>"This rich and creamy flavoursome Chicken tikka rivals any Indian restaurant! Why go out when you can make it better at home! With aromatic golden chicken pieces swimming in an incredible curry sauce, this Chicken Tikka Masala recipe is one of the best you will try!",
              'category'=>'Chicken'
          ]);
          $post->save();

     }
         */


        public function run()
        {
            factory('App\Post', 300)->create();
        }
    }