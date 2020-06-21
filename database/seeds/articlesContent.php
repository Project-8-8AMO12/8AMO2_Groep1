<?php

use Illuminate\Database\Seeder;

class  extends Seeder
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

        DB::table('articles')->insert([
            'id' => 2,
            'page_id' => 8,
            'type' => 'Article',
            'title' => 'De Bijenstal',
            'subtitle' => '',
            'text' => 'De bijenstal in polderpark Cronesteyn is geopend op de eerste zondag van de maand vanaf begin april tot eind september, van 14h00 tot 15h00. Voor iedereen die een kijkje in de kast wil nemen.

            In de bijenstal worden ook de praktijk lessen van de basiscursus gegeven.',
            'img_url' => 'https://www.imkersleiden.nl/wp-content/uploads/2020/01/image002.png',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }

}
