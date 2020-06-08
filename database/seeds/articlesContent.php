<?php

use Illuminate\Database\Seeder;

class articlesContent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'id' => 1,
            'page_id' => 1,
            'type' => Str::random(10),
            'title' => Str::random(10),
            'subtitle' => Str::random(10),
            'text' => Str::random(10),
            'img_url' => Str::random(10),
            'author' => Str::random(10),
            'edit_permission_lvl' => 1
        ]);
    }
}
