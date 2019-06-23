<?php

use Illuminate\Database\Seeder;

class ReklamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reklam = new \App\Reklam([
            'image'=>'public/storage/basil.jpg'
        ]);
        $reklam->save();

    }
}
