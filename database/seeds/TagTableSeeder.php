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
                //create tags
                $tag = new \App\Tag();
                $tag->name = "30min";
                $tag->save();

                $tag = new \App\Tag();
                $tag->name = "Jimmy Oliver approved";
                $tag->save();

                $tag = new \App\Tag();
                $tag->name = "party";
                $tag->save();

                $tag = new \App\Tag();
                $tag->name = "romantic_dinner";
                $tag->save();

                $tag = new \App\Tag();
                $tag->name = "hot";
                $tag->save();
            }
}
