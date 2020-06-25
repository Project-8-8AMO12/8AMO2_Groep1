<?php

use Illuminate\Database\Seeder;

class articlesContent extends Seeder
{

    public function run() {
        $date = new DateTime('now');
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

        DB::table('articles')->insert([
            'id' => 3,
            'page_id' => 2,
            'type' => 'Article',
            'title' => 'Activiteiten',
            'subtitle' => 'Koninginneteelt',
            'text' => 'Het imkeren in Nederland en meer specifiek in de stad vraagt om een type bij dat zachtaardig is: je wilt geen ruzie met de buren omdat ze last hebben van je bijen. We hebben een werkgroep die aan koninginnenteelt doet en ieder jaar naar Ameland gaat.
            We komen bij elkaar voor de start van de teelt en bespreken de aanpak van het teeltseizoen. We helpen elkaar met kennis, en als er iets fout gaat helpen we om toch moeren te kunnen zenden naar het bevruchtingsstation.
            Wij gebruiken Buckfast-moeren als startpunt, waar we larven en eitjes van verzamelen om verder te telen. De moeren zijn allen P-moeren, dus bevrucht door zuivere Buckfast darren.
            Ieder jaar is het weer een uitdaging om mooie moeren te kweken, het enthousiasme is groot en we leren er iedere keer veel van.
            De kosten die hiermee gemoeid zijn worden omgeslagen over het aantal moeren waarmee men wil deelnemen en bedragen rond de 25 euro per moer. Je zorgt wel voor eigen kastjes om naar Ameland te gaan.',
            'img_url' => 'https://www.imkersleiden.nl/wp-content/uploads/2020/01/image002.png',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }

}
