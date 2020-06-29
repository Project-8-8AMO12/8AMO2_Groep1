<?php

use Illuminate\Database\Seeder;

class webpageSeeder extends Seeder
{

    public function run() {
        $date = new DateTime('now');
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

        // Zwerm Gezien?
        DB::table('webpages')->insert([
            'page_id' => 5,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Zwerm Gezien?',
            'subtitle' => 'Zwerm Gezien?',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // Lid Worden
        DB::table('webpages')->insert([
            'page_id' => 6,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Lid Worden',
            'subtitle' => 'Lid Worden',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // Agenda
        DB::table('webpages')->insert([
            'page_id' => 7,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Agenda',
            'subtitle' => 'Agenda',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        //
        DB::table('webpages')->insert([
            'page_id' => 8,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Nieuws',
            'subtitle' => 'Nieuws',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        // De bijenstal
        DB::table('webpages')->insert([
            'page_id' => 9,
            'type' => 'article',
            'editable' => 1,
            'title' => 'De Bijenstal',
            'subtitle' => 'De Bijenstal',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('webpages')->insert([
            'page_id' => 10,
            'type' => 'article',
            'editable' => 1,
            'title' => 'De winkel',
            'subtitle' => 'De winkel',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('webpages')->insert([
            'page_id' => 11,
            'type' => 'article',
            'editable' => 1,
            'title' => 'De Stertselaar',
            'subtitle' => 'De Stertselaar',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('webpages')->insert([
            'page_id' => 12,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Foto\'s en video\'s',
            'subtitle' => 'Foto\'s en video\'s',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('webpages')->insert([
            'page_id' => 13,
            'type' => 'article',
            'editable' => 1,
            'title' => 'Contact',
            'subtitle' => 'Contact',
            'created_at' => $date,
            'updated_at' => $date
        ]);

    }
}
