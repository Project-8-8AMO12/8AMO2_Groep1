<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articlesContent extends Seeder
{

    public function run()
    {
        $date = new DateTime('now');
        // Home
        DB::table('articles')->insert([
            'id' => 1,
            'page_id' => 1,
            'type' => 'Alert',
            'title' => 'CORONA update 8 mei 2020',
            'subtitle' => '',
            'text' => 'In overleg met de depot beheerder is besloten om het depot per zaterdag 16 mei weer open te stellen, 13h00-15h00. <br /><br />Wel zullen er spelregels gelden: <ul><li>Er wordt maar 1 klant tegelijk in het gebouw toegelaten, men wordt verzocht buiten te wachten (met inachtneming van 1,5m)</li><li>Er kan alleen per PIN betaald worden</li><li>De depot beheerder zal de materialen verzamelen en op de tafel zetten zodat de klant na betaling de spullen kan pakken</li><li>De uitleen spullen zullen voor opening klaar gezet worden&nbsp;</li><li>Er kan geen gebruik gemaakt worden van het toilet</li></ul>We zijn blij het depot weer open te kunnen stellen, de bijen wachten niet!',
            'img_url' => '/img/picture_1.png',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'pos' => 1,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('articles')->insert([
            'id' => 2,
            'page_id' => 1,
            'type' => 'Alert',
            'title' => 'CORONA update 31 maart 2020',
            'subtitle' => '',
            'text' => 'Het bestuur heeft besloten de algemene ledenvergadering te verplaatsen van 17 april 2020 naar vrijdag 25 september 2020 om 20h00. In verband met corona is het niet verstandig bij elkaar te komen. Een digitale vergadering heeft niet onze voorkeur, we verwachten dan minder deelname en minder overleg tussen leden en bestuur. Uitstel is daarom de beste optie.',
            'img_url' => '',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'pos' => 2,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('articles')->insert([
            'id' => 3,
            'page_id' => 1,
            'type' => 'Article',
            'title' => 'De imkergroep Leiden',
            'subtitle' => 'Officieel NBV vereniging',
            'text' => 'Er is in ons land een aantal imkersverenigingen, waarvan de Nederlandse Bijenhouders Vereniging (NBV) met bijna 6000 leden, de grootste is. De Imkersvereniging Leiden en omstreken is aangesloten bij de NBV.<br /><br />Regelmatig organiseert onze vereniging imkersavonden. Op deze bijeenkomsten worden lezingen gehouden en films vertoond. Ook zijn deze avonden het moment waarop imkers elkaar ontmoeten en ervaringen uitwisselen. Soms worden ook excursies georganiseerd. De imkersavonden vinden in principe altijd plaats op de laatste vrijdag van de maand. Ze worden gehouden in de kantine van de Tuinvereniging Cronesteijn aan het Boerenpad 1 te Leiden.',
            'img_url' => '',
            'author' => 'Unknown',
            'edit_permission_lvl' => 1,
            'pos' => 3,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('articles')->insert([
            'id' => 4,
            'page_id' => 1,
            'type' => 'Article',
            'title' => 'Wat we al zo doen',
            'subtitle' => 'Onze vele bij-zaken',
            'text' => 'Als vereniging zijn we bezig bijtjes en organiseren veel leuke activiteiten, promoten wij onze hobby en delen we graag al onze kennis met mede-imker enthousiastelingen.<ul class="opsomming">
    <li><h5>Bij-eenkomsten</h5><br />Het regelmatig organiseren van bijeenkomsten met lezingen, films, diavertoningen, praatavonden, en van excursies.</li>
    <li><h5>Imkersartikelen</h5><br />Imkers binnen en buiten de Leidse regio kunnen voor de meest voorkomende imkersartikelen terecht bij de winkel van de vereniging, gelegen op het terrein van de tuinvereniging ‘Cronesteyn’.</li>
    <li><h5>Beginnend imker begeleiding</h5><br />Beginnend imkers worden door ervaren leden met raad en daad terzijde gestaan bij het verzorgen van het eerste bijenvolk.</li>
    <li><h5>Standplaats</h5><br />Aan leden wordt zoveel mogelijk hulp geboden bij het verkrijgen van een standplaats voor hun bijenvolk(en) en bij de aankoop van imkersartikelen.</li>
    <li><h5>Nieuwsbrief</h5><br />Periodiek verschijnt de nieuwsbrief ‘De Stertselaar’, samengesteld door leden en bestemd voor imkers in Leiden en omgeving.</li>
    <li><h5>Bijenmarkt</h5><br />Het jaarlijks organiseren van de bijenmarkt aan de terrein van de Museum Volkenkunde te Leiden. Zie voor informatie de <a href="http://www.deleidsebijenmarkt.nl/">leidsebijenmarkt</a></li>
    <li><h5>Bijen Bibliotheek</h5><br />Een eigen bibliotheek, waaruit leden boeken en tijdschriften uit binnen- en buitenland kunnen lenen. Regelmatig worden nieuwe titels aangeschaft.</li>
    <li><h5>Cursussen bijenteelt</h5><br />Elk jaar worden cursussen bijenteelt gegeven voor beginners en bij voldoende belangstelling ook voor gevorderden. Voor de praktijklessen bijenteelt wordt gebruik gemaakt van onze bijenstal in het polderpark ‘Cronesteyn’.</li>
    <li><h5>Voorlichting</h5><br />Aan voorlichting en publiciteit wordt veel tijd en zorg besteed. U kunt de imkers van de vereniging dan ook regelmatig op belangrijke evenementen in de Leidse regio aantreffen, zoals op jaarmarkten, tentoonstellingen, e.d.</li>
    <li><h5>Standplaats</h5><br />Aan leden wordt zoveel mogelijk hulp geboden bij het verkrijgen van een standplaats voor hun bijenvolk(en) en bij de aankoop van imkersartikelen.</li>
</ul>',
            'img_url' => '',
            'author' => 'Unknown',
            'edit_permission_lvl' => 1,
            'pos' => 4,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('articles')->insert([
            'id' => 5,
            'page_id' => 1,
            'type' => 'Side_img_card',
            'title' => 'Heempark',
            'subtitle' => '',
            'text' => 'In het Heempark, gelegen aan de Oegstgeesterweg te Leiden, staat een overdekte bijenstal, waar verschillende bijenkorven en kasten staan opgesteld. Daaronder een demonstratiekast van plexiglas. Deze fraaie stal is voor het publiek op afspraak toegankelijk.',
            'img_url' => 'images/picture_1.png',
            'author' => 'Unknown',
            'edit_permission_lvl' => 1,
            'pos' => 5,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('articles')->insert([
            'id' => 6,
            'page_id' => 1,
            'type' => 'Side_img_card',
            'title' => 'Koninginneweg te Noordwijkerhout',
            'subtitle' => '',
            'text' => 'Aan de Koninginneweg te Noordwijkerhout bevindt zich ook een stal van de vereniging.',
            'img_url' => 'images/picture_2.png',
            'author' => 'Unknown',
            'edit_permission_lvl' => 1,
            'pos' => 6,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('articles')->insert([
            'id' => 7,
            'page_id' => 1,
            'type' => 'Side_img_card',
            'title' => 'De Merenwijk',
            'subtitle' => '',
            'text' => 'Sinds 1991 is er een bijenstal nabij de kinderboerderij in de Merenwijk, met een aantal bijenvolken in kasten.',
            'img_url' => 'images/picture_3.png',
            'author' => 'Unknown',
            'edit_permission_lvl' => 1,
            'pos' => 7,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('articles')->insert([
            'id' => 8,
            'page_id' => 1,
            'type' => 'Side_img_card',
            'title' => 'Polderpark Cronesteijn',
            'subtitle' => '',
            'text' => 'Ten slotte staat er een bijenstal in het Polderpark Cronesteijn.',
            'img_url' => 'images/picture_4.png',
            'author' => 'Unknown',
            'edit_permission_lvl' => 1,
            'pos' => 8,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
