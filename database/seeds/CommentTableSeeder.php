<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**public function run()
    {
        $comment = new \App\Comment([
            'content'=>"Good one!",
            'user_id'=>1,
            'post_id'=>1
        ]);
        $comment->save();

        $comment = new \App\Comment([
            'content'=>"It is my favorite one so far!",
            'user_id'=>1,
            'post_id'=>1
        ]);
        $comment->save();

    }
       */
        public function run()
    {
        factory('App\Comment', 600)->create();
    }
}
