<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0; $i<5; $i++) {
          DB::table('news')->insert([
              'title' => str_random(10),
              'content' => str_random(10),
              'user_id' => 1
          ]);
        }
    }
}
