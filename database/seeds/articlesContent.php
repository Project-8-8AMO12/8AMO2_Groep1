<?php

use Illuminate\Database\Seeder;

class articlesContent extends Seeder
{

    public function run() {
        $date = new DateTime('now');
        DB::table('articles')->insert([
            'id' => 1,
            'page_id' => 100,
            'type' => 'Article',
            'title' => 'CORONA update 8 mei 2020',
            'subtitle' => '',
            'text' => 'In overleg met de depot beheerder is besloten om het depot per zaterdag 16 mei weer open te stellen, 13h00-15h00.',
            'img_url' => '/img/picture_1.png',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }

}
