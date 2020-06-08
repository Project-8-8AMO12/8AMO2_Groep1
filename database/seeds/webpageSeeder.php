<?php

use Illuminate\Database\Seeder;

class webpageSeeder extends Seeder
{

    public function run() {
        $date = new DateTime('now');
        DB::table('webpages')->insert([
            'page_id' => 100,
            'type' => 'article',
            'editable' => 1,
            'title' => 'CORONA update 8 mei 2020',
            'subtitle' => 'Informatie over Corona over Imkersleiden',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
