<?php

use Illuminate\Database\Seeder;

class webpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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

        // Home
        DB::table('webpages')->insert([
            'page_id' => 1,
            'type' => 'main',
            'editable' => 1,
            'title' => 'Home',
            'subtitle' => 'De imker vereniging van Leiden',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // Activiteiten
        DB::table('webpages')->insert([
            'page_id' => 2,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Activiteiten',
            'subtitle' => 'Leer de wondere wereld van de bij',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // Cursussen
        DB::table('webpages')->insert([
            'page_id' => 3,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Cursussen',
            'subtitle' => 'De kunst van de bijenteelt',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // De vereniging
        DB::table('webpages')->insert([
            'page_id' => 4,
            'type' => 'article',
            'editable' => 1,
            'title' => 'De vereniging',
            'subtitle' => 'Alles over de vereniging',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // De winkel
        DB::table('webpages')->insert([
            'page_id' => 5,
            'type' => 'article',
            'editable' => 1,
            'title' => 'De winkel',
            'subtitle' => 'De winkel',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // Foto's en video's
        DB::table('webpages')->insert([
            'page_id' => 6,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Foto\'s en video\'s',
            'subtitle' => 'Foto\'s en video\'s',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // Bijengezondheid
        DB::table('webpages')->insert([
            'page_id' => 7,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Bijengezondheid',
            'subtitle' => 'Bijengezondheid',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
