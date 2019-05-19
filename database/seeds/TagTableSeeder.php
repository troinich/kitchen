<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
            /**
             * Run the database seeds.
             *
             * @return void
             */
            public function run()
            {
                //create some fake data
                $tag = new \App\Tag();
                $tag->name = "Vegetarian";
                $tag->save();

                $tag = new \App\Tag();
                $tag->name = "For kids";
                $tag->save();

                $tag = new \App\Tag();
                $tag->name = "Asian";
                $tag->save();

                $tag = new \App\Tag();
                $tag->name = "European";
                $tag->save();

                $tag = new \App\Tag();
                $tag->name = "Easy/Quick";
                $tag->save();

            }
}
