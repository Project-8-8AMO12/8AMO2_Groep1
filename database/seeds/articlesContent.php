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

        //Activiteiten
        DB::table('articles')->insert([
            'id' => 9,
            'page_id' => 2,
            'type' => 'Side_img_card',
            'title' => ' Koninginneteelt',
            'subtitle' => '',
            'text' => 'Het imkeren in Nederland en meer specifiek in de stad vraagt om een type bij dat zachtaardig is: je wilt geen ruzie met de buren omdat ze last hebben van je bijen. We hebben een werkgroep die aan koninginnenteelt doet en ieder jaar naar Ameland gaat. We komen bij elkaar voor de start van de teelt en bespreken de aanpak van het teeltseizoen. We helpen elkaar met kennis, en als er iets fout gaat helpen we om toch moeren te kunnen zenden naar het bevruchtingsstation. Wij gebruiken Buckfast-moeren als startpunt, waar we larven en eitjes van verzamelen om verder te telen. De moeren zijn allen P-moeren, dus bevrucht door zuivere Buckfast darren.<br /><br />Ieder jaar is het weer een uitdaging om mooie moeren te kweken, het enthousiasme is groot en we leren er iedere keer veel van.<br /><br />De kosten die hiermee gemoeid zijn worden omgeslagen over het aantal moeren waarmee men wil deelnemen en bedragen rond de 25 euro per moer. Je zorgt wel voor eigen kastjes om naar Ameland te gaan.
 ',
            'img_url' => 'https://www.imkersleiden.nl/wp-content/uploads/2019/07/Voorbeeld-nieuws.jpg',
            'author' => 'Unknown',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '2'
        ]);

        DB::table('articles')->insert([
            'id' => 10,
            'page_id' => 2,
            'type' => 'Article',
            'title' => 'Wil je ook de wereld van de bijenteelt leren kennen?',
            'subtitle' => '',
            'text' => 'Meld u aan door te mailen naar <a href="mailto:leidsebijen@live.nl">leidsebijen@live.nl</a> tav Roland Koster.',
            'img_url' => 'https://www.imkersleiden.nl/wp-content/uploads/2019/07/bijenkasten.jpg',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '2'
        ]);


        // Cursussen
        DB::table('articles')->insert([
            'id' => 11,
            'page_id' => 3,
            'type' => 'Article',
            'title' => 'Basiscursus bijenteelt 2020',
            'subtitle' => '',
            'text' => 'Begin maart 2020 zal in Leiden opnieuw een cursus bijenteelt voor beginners van start gaan.<br /><br />
De cursus zal bestaan uit 6 theorielessen en 16 praktijklessen. De praktijk van het imkeren wordt beoefend in de bijenstal in het polderpark Cronesteyn te Leiden.<br /><br />
Cursisten ontvangen cursusmateriaal over de grondbeginselen van de bijenteelt. Tegelijk met het volgen van de cursus kunnen ze profiteren van de faciliteiten van de Imkersvereniging, zoals het bijwonen van bijeenkomsten met interessante lezingen.<br /><br />
Verder ontvangen cursisten tijdens de cursus het tijdschrift ‘Bijen houden’ van de Nederlandse Bijenhouders Vereniging.',
            'img_url' => 'https://www.imkersleiden.nl/wp-content/uploads/2020/01/image002.png',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '1'
        ]);

        DB::table('articles')->insert([
            'id' => 12,
            'page_id' => 3,
            'type' => 'Article',
            'title' => 'Rooster Basiscursus Bijenteelt – Leiden',
            'subtitle' => '',
            'text' => '<table><tbody><tr><td><strong>T1</strong></td><td><span>Kennismaking, introductie, lesmateriaal (Handboek praktijk) en imker materialen</span></td></tr><tr><td><strong>T2</strong></td><td><span>De biologie van de bij blz 7 e.v.</span></td></tr><tr><td><strong>T3</strong></td><td><span>Werken in de bijen blz 38 e.v.</span></td></tr><tr><td><strong>T4</strong></td><td><span>Zwermen en afleggers blz 52 e.v.</span></td></tr><tr><td><strong>T5</strong></td><td><span>Bijengezondheid blz 93 e.v.</span></td></tr><tr><td><strong>P1</strong></td><td><span>Timmerles</span></td></tr><tr><td><strong>P2</strong></td><td><span>Voorbereiding bijenseizoen, schoonmaken materiaal</span></td></tr><tr><td><strong>P3</strong></td><td><span>Voorjaarscontrole</span></td></tr><tr><td><strong>P4</strong></td><td><span>Ruimte geven, kunstraat, Varroa bouwraam, kijken in het volk (afh van het weer)</span></td></tr><tr><td><strong>P5</strong></td><td><span>Zwermplannen, honingkamer plaatsen, kijken in het volk (afh van het weer)</span></td></tr><tr><td><strong>P6</strong></td><td><span>Zwermverhindering, volken splitsen, moer zoeken</span></td></tr><tr><td><strong>P7</strong></td><td><span>Doppen breken, jonge moeren in laten lopen</span></td></tr><tr><td><strong>P8</strong></td><td><span>Reserve les v.h.g.d. moeren nog niet rijp zijn: doppen breken, jonge moeren in laten lopen</span></td></tr><tr><td><strong>P9</strong></td><td><span>Varroa bestrijding oxaalzuur druppelen</span></td></tr><tr><td><strong>P10</strong></td><td><span>Bijenmarkt (2 shifts, 2de zaterdag in juni)</span></td></tr><tr><td><strong>P11</strong></td><td><span>controle jonge moeren</span></td></tr><tr><td><strong>P12</strong></td><td><span>Honing oogsten (uitlaat plaatsen)</span></td></tr><tr><td><strong>P13</strong></td><td><span>Honing slingeren</span></td></tr><tr><td><strong>P14</strong></td><td><span>Najaarsverzorging, suiker voeren en varroa bestrijding</span></td></tr><tr><td><strong>P15</strong></td><td><span>Najaarsverzorging, controle voedselvoorraad en volkssterkte</span></td></tr><tr><td><strong>T6</strong></td><td><span>Evaluatie, vragen, volgende stappen</span></td></tr><tr><td><strong></strong></td><td><span>Diploma uitreiking</span></td></tr><tr><td><strong>P16</strong></td><td><span>Oxaalzuur behandeling</span></td></tr></tbody></table>',
            'img_url' => '',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '2'
        ]);

        DB::table('articles')->insert([
            'id' => 13,
            'page_id' => 3,
            'type' => 'Article',
            'title' => '',
            'subtitle' => '',
            'text' => 'De theorie (T)-lessen worden gegeven van 19.30 uur tot 22.00 uur in de kantine tegenover het “depot” van de imkervereniging Leiden e.o. op de volkstuinvereniging Cronensteyn te Leiden.<br /><br />
De praktijk (P)-lessen worden gegeven van 18.00 uur tot 20.00 uur behalve voor P2 (10.00 uur) op de bijenstand van de vereniging in Park Cronensteyn met uitzondering van P10 (Bijenmarkt) en P13 (andere locatie, 10h00 uur / 11h30).
<br /><br />Kosten van de Basiscursus Bijenteelt zijn € 237,50',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '3'
        ]);

        DB::table('articles')->insert([
            'id' => 14,
            'page_id' => 3,
            'type' => 'Article',
            'title' => 'Cursisten moeten om deze cursus te kunnen volgen in het bezit zijn van:',
            'subtitle' => '',
            'text' => '<ul><li><span>beschermende kleding</span></li><li><span>beitel</span></li><li><span>veger</span></li><li><span>beroker (optioneel, voor degene die daadwerkelijk gaan imkeren)</span></li><li><span>Theorie en Praktijk Lesboeken “Basis Cursus Compleet” van de NBV</span></li><li><span>het Handboek Praktijk “Bijenhouden Zo doe je dat” van de NBV</span></li></ul><br /> De daaraan verbonden, additionele kosten bedragen circa € 120. Deze zaken zullen worden besproken op de eerste bijeenkomst en kunnen via de vereniging gekocht worden.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '4'
        ]);

        DB::table('articles')->insert([
            'id' => 15,
            'page_id' => 3,
            'type' => 'Alert',
            'title' => 'Wil je ook de wereld van de bijenteelt leren kennen?',
            'subtitle' => '',
            'text' => 'Meld u aan door te mailen naar <a href="mailto:leidsebijen@live.nl">leidsebijen@live.nl</a>  tav Roland Koster
            <br>Begin december zult u dan een e-mail ontvangen met details over het aanmeldingsproces.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '5'
        ]);

        // De Vereniging
        DB::table('articles')->insert([
            'id' => 16,
            'page_id' => 4,
            'type' => 'Alert',
            'title' => '',
            'subtitle' => '',
            'text' => '
De contributie voor leden bedraagt voor 2020 € 77,50 per jaar.<br /><br />
Leden van de imkersvereniging Leiden en omstreken zijn tevens lid van de NBV. De bijenvolken van de leden zijn verzekerd. Leden ontvangen het maandblad ‘Bijen’ en ‘De Stertselaar’.<br /><br />
De donatie voor belangstellenden bedraagt ten minste € 15,- per jaar.
Donateurs ontvangen ‘De Stertselaar’.
',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '1'
        ]);

        DB::table('articles')->insert([
            'id' => 17,
            'page_id' => 4,
            'type' => 'Article',
            'title' => 'Standplaatsen',
            'subtitle' => 'Vinden en delen',
            'text' => '
De vereniging heeft vier officiele bijenstallen, in het Heempark, Noordwijkerhout, Merenwijk en Polderpark Cronesteijn.<br /><br />
Zoekt u een plaats voor uw bijenvolken of weet u een plek voor een ander? Neem dan contact met ons op',
            'img_url' => 'https://www.imkersleiden.nl/wp-content/uploads/2019/07/bijenkasten.jpg',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '2'
        ]);

        DB::table('articles')->insert([
            'id' => 18,
            'page_id' => 4,
            'type' => 'Article',
            'title' => 'Waarom doen we het?',
            'subtitle' => 'Het Nut van Bijenhouden',
            'text' => '<strong>Bijenhouden als hobby</strong><br /><br />De tijd van de romantische bijenteelt in strokorven is voorbij. Tegenwoordig worden bijen hoofdzakelijk gehouden in meerdelige houten of kunstof kasten. Het voordeel van kasten is dat de imker zijn volken gemakkelijker kan controleren. De raampjes kunnen er worden uitgehaald om de honing te oogsten, en om ziekten en plagen van de bijen te bestrijden. Het is in Nederland niet mogelijk van de bijenteelt te leven, maar als de imker het goed doet, kan het imkeren een aardige hoeveelheid honing opleveren, en hoeft de hobby weinig geld te kosten.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '3'
        ]);

        DB::table('articles')->insert([
            'id' => 19,
            'page_id' => 4,
            'type' => 'Article',
            'title' => 'Het nut van de bijen',
            'subtitle' => '',
            'text' => 'Honingbijen leveren o.a. was en honing, maar ook bijengif, propolis en dienen als bestuivers van gewassen. Dat is het directe nut van bijen. Bij het verzamelen van nectar en stuifmeel vliegt de bij van bloem naar bloem. Een deel van het stuifmeel blijft hierbij aan het behaarde lichaam en de pootjes kleven en zorgt voor de bestuiving van een volgende bloem. Doordat bijen bloemvast zijn, (ze vliegen op de bloemen van één plantensoort zolang daar voedsel te halen is) zijn ze uitermate geschikt voor de bestuiving van appel, peer, pruim en kers, maar ook voor bramen, aardbeien en bessen. Weet u wel dat 80% van de gewassen worden bestoven door honingbijen? Vooral in kassen moeten bijen ingezet worden voor de bestuiving van paprika en tomaten en bij de zaadteelt. De economische waarde ­‐ geschat op 730 mln Euro ­‐ van de honingbij ligt in de bestuivingsfunktie. De honing opbrengst bedraagt echter slechts 5% van de Nederlandse consumptie. Bijenwas werd in het verleden gebruikt voor verlichting als kaarsen, heden wordt was gebruikt in de cosmetica­‐industrie en als glansmiddel bij veel soorten snoep en drop.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '4'
        ]);

        DB::table('articles')->insert([
            'id' => 20,
            'page_id' => 4,
            'type' => 'Article',
            'title' => 'Natuur en milieu',
            'subtitle' => '',
            'text' => 'Bijenhouden is een echte natuurhobby: voor het imkeren bent u afhankelijk van het weer voor een goede honingoogst. Door het gebruik van chemische gewasbeschermingsmiddelen en het voorkomen van monocultures in de landbouw, zijn veel andere bestuivende insekten uit ons milieu verdwenen. Hun taak wordt nu overgenomen door de honingbij, zodat bijvoorbeeld heesters in plantsoenen dankzij de bijen ‘s winters bessen dragen, en er op die manier voor zorgen dat veel vogelsoorten in onze steden en dorpen kunnen overwinteren. Op hun manier dragen honingbijen dus bij aan de instandhouding van de flora en fauna.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '5'
        ]);

        DB::table('articles')->insert([
            'id' => 21,
            'page_id' => 4,
            'type' => 'Article',
            'title' => 'Natuur en milieu',
            'subtitle' => '',
            'text' => 'Bijenhouden is een echte natuurhobby: voor het imkeren bent u afhankelijk van het weer voor een goede honingoogst. Door het gebruik van chemische gewasbeschermingsmiddelen en het voorkomen van monocultures in de landbouw, zijn veel andere bestuivende insekten uit ons milieu verdwenen. Hun taak wordt nu overgenomen door de honingbij, zodat bijvoorbeeld heesters in plantsoenen dankzij de bijen ‘s winters bessen dragen, en er op die manier voor zorgen dat veel vogelsoorten in onze steden en dorpen kunnen overwinteren. Op hun manier dragen honingbijen dus bij aan de instandhouding van de flora en fauna.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '6'
        ]);

        DB::table('articles')->insert([
            'id' => 22,
            'page_id' => 4,
            'type' => 'Article',
            'title' => 'Tips voor toekomstige bijenhouders',
            'subtitle' => '',
            'text' => 'Heeft u het plan opgevat om bijen te gaan houden? Dan is het van belang dat u zich aanmeldt bij een plaatselijke imkersvereniging: deze staat u bij met raad en daad, en helpt u vaak aan uw eerste volkje. Als lid van een plaatselijke afdeling bent u tevens lid van de NVB, en ontvangt u een maandblad. Bovendien is het goed een cursus te volgen voor beginnend of gevorderd imker. Wie een cursus voor beginners heeft gevolgd is in staat zelfstandig en met succes bijen te houden.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '7'
        ]);

        DB::table('articles')->insert([
            'id' => 23,
            'page_id' => 4,
            'type' => 'Article',
            'title' => 'Tips voor de niet-­bijenhouders',
            'subtitle' => '',
            'text' => 'Ook als u niet van plan bent bijen te gaan houden, kunt u de bijen van dienst zijn, door bijvoorbeeld planten en struiken in uw tuin te zetten die nectar en stuifmeel leveren. Voor u levert dat dan een prachtig schouwspel van nijvere bijen en fleurige vlinders op, en de imkers in de buurt zullen u dankbaar zijn. Ook kunt u ervoor zorgen de bijen gezond te houden, door geen insecten­‐ of onkruidbestrijdingsmiddelen in de tuin te gebruiken, en wellicht uw buren en uw gemeente vragen hetzelfde te doen. Ook al houdt u geen bijen, u kunt toch genieten van echte Nederlandse honing uit de buurt. Bijna elk dorp of elke stad kent wel een aantal imkers die aan huis hun honing verkopen, die, wie weet, gehaald is in uw eigen tuin.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '8'
        ]);

        //Zwerm Gezien?

        DB::table('articles')->insert([
            'id' => 24,
            'page_id' => 5,
            'type' => 'Article',
            'title' => 'Kenmerken voor een bijenzwerm;',
            'subtitle' => '',
            'text' => 'Een bijenzwerm is een grote “bal of tros” met duizenden (tot wel 20.000) honingbijen die aan een voorwerp, bijvoorbeeld een tak, dakgoot of fiets, hangt. Imkers kunnen een bijenzwerm “scheppen” met behulp van een korf of bak. Het is belangrijk dat wij er bij kunnen, eventueel met een ladder (graag zelf voor zorgen, kunnen wij niet meenemen). Als een zwerm onbereikbaar is, dan kunnen we niet “scheppen”.
Soms kruipt een zwerm in spouwmuren, schoorstenen en tussen de muren of aftimmering. Dan kunnen we niet bij de zwerm en kunnen we helaas niets doen.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '1'
        ]);

        DB::table('articles')->insert([
            'id' => 25,
            'page_id' => 5,
            'type' => 'Article',
            'title' => 'Hommels',
            'subtitle' => '',
            'text' => 'Hommels zijn wilde bijen en vaak wat “dikker” en “hariger” dan honingbijen. Hommels nestelen onder andere in vogelhuisjes, voegen en onder de grond. Hommelnesten kunnen niet verplaatst of geschept worden zoals bij zwermen honingbijen. Als imkers kunnen we u daar niet bij helpen. Handig om te weten:
– Hommels steken zelden mits ze met rust worden gelaten. Loop niet vlak voor de vliegopening langs – bij botsing kunnen hommels ook wel eens steken.
– Hommelnesten sterven vanzelf uit in de herfst, vroege winter, ze verdwijnen vanzelf – u hoeft niets te doen.
– Hommels nestelen graag in “niet schoongemaakte” nestkastjes – maak in de winter nestkastjes schoon als je geen hommels wilt
– Om te voorkomen dat hommels het volgend jaar op een plek terugkomen om een nest te bouwen, kunt u in de winter voegen of andere gaten dichtstoppen – bijvoorbeeld met een bijenbekje (houdt bijen, wespen en muizen tegen met behoud van ventilatie).
Zoek op het internet eventueel een plaatje van een honingbij en hommels (er zijn veel verschillende soorten hommels).',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '2'
        ]);

        DB::table('articles')->insert([
            'id' => 26,
            'page_id' => 5,
            'type' => 'Article',
            'title' => 'Wespen',
            'subtitle' => '',
            'text' => 'Wespen hebben gele streepjes en zijn meestal dunner dan honingbijen. Wespen zwermen niet. Wespen hangen niet in een tros (zonder nest) in bijvoorbeeld een boom zoals een zwerm bijen. Wespen worden meestal in juli/ augustus waargenomen. Ze nestelen graag in hoekjes, lege ruimtes en holtes. Als imkers kunnen wij niets aan wespen doen. Handig om te weten:
– Wespen zijn zeer nuttige beesten en eten insecten zoals muggen – als je er geen of weinig last van hebt, laat wespen dan zitten;
– Wespennesten sterven vanzelf uit in de herfst, vroege winter, ze verdwijnen vanzelf – u hoeft niets te doen.
– Om te voorkomen dat wespen het volgend jaar op een plek terugkomen om een nest te bouwen, kunt u in de winter voegen of andere gaten dichtstoppen – bijvoorbeeld met een bijenbekje (houdt bijen, wespen en muizen tegen met behoud van ventilatie).
Zoek op het internet eventueel een plaatje van een honingbij en wespen.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '3'
        ]);

        //Lid Worden

        DB::table('articles')->insert([
            'id' => 27,
            'page_id' => 6,
            'type' => 'Article',
            'title' => '',
            'subtitle' => '',
            'text' => 'Een lid van de Imkersvereniging Leiden en omstreken kan meedoen met de activiteiten van de vereniging (zoals imkersavonden), imkersbenodigdheden lenen (zoals slinger en waspers) en ontvangt de nieuwsbrieven. Ook heeft een lid inspraak d.m.v. stemrecht op de algemene leden vergadering. Lid worden van de Imkersvereniging Leiden en omstreken begint met lid worden van de Landelijke imkersvereniging NBV (Nederlandse Bijen Vereniging) met daarbij het lidmaatschap voor de afdeling Leiden. U kunt zich op de website van de NBV inschrijven: https://www.bijenhouders.nl/over-de-nbv/lidmaatschap#aanmeldformulier',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '1'
        ]);

        DB::table('articles')->insert([
            'id' => 28,
            'page_id' => 6,
            'type' => 'Article',
            'title' => '',
            'subtitle' => '',
            'text' => 'Mocht u geen lid van de NBV en de afdeling Leiden willen worden, maar de vereniging en haar doelen wel een warm hart toedragen, dan kunt u vanaf 15,- euro per jaar ook donateur worden. U kunt dan meedoen met activiteiten, imkersbenodigdheden lenen en ontvangt nieuwsbrieven. U heeft geen inspraak als lid in de vereniging. Wilt u donateur worden, stuur dan een mail met uw naam, adres en telefoonnummer naar leidsebijen@live.nl en wij zorgen dat u donateur wordt.',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '2'
        ]);

        //Agenda

        //Nieuws
        DB::table('articles')->insert([
            'id' => 29,
            'page_id' => 8,
            'type' => 'Article',
            'title' => 'De laatste nieuwtjes',
            'subtitle' => 'Zo blijf je op de hoogte',
            'text' => '
Ook in 2020 gaat de basis cursus imkeren weer van start. De cursus is zoals altijd vol en de whatsapp groepen zijn aangemaakt. Begin maart beginnen we. Met het zachte weer dat we nu begin februari hebben zullen we de les-volken extra in de gaten moeten houden!
Tijdens de controle begin januari bleek één volk het niet overleefd te hebben, maar er zijn er nog gelukkig genoeg om les te kunnen geven.
',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '1'
        ]);

        //De Bijenstal
        DB::table('articles')->insert([
            'id' => 30,
            'page_id' => 9,
            'type' => 'Side_img_card',
            'title' => 'De Bijenstal',
            'subtitle' => '',
            'text' => 'De bijenstal in polderpark Cronesteyn is geopend op de eerste zondag van de maand vanaf begin april tot eind september, van 14h00 tot 15h00. Voor iedereen die een kijkje in de kast wil nemen.
            In de bijenstal worden ook de praktijk lessen van de basiscursus gegeven.',
            'img_url' => 'https://www.imkersleiden.nl/wp-content/uploads/2020/01/image002.png',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '1'
        ]);

        //De Winkel
        DB::table('articles')->insert([
            'id' => 31,
            'page_id' => 10,
            'type' => 'Article',
            'title' => 'De Imkersvereniging',
            'subtitle' => '',
            'text' => 'De Imkersvereniging Leiden en omstreken heeft een winkel, voorheen een depot van het Bijenhuis (NBV). In deze winkel zijn de meest voorkomende imkersartikelen te koop, onder andere: imker gereedschappen, kasten (ceder en vuren) en kastonderdelen (Dadant en Spaarkast), Varoa bestrijding, kleding en handschoenen, koninginnenteelt benodigdheden. In de winkel kan alleen met PIN betaald worden, contant of per overschrijving worden niet geaccepteerd. De prijzen die de vereniging hanteert zijn inclusief een transport toeslag van 3%. In het geval dat u een grote bestelling wilt plaatsen, of in het geval dat u een specifiek product wilt aanschaffen, kunt u de depotbeheerder of de penningmeester van de vereniging contacten. In de inwinter periode (Augustus-Oktober) biedt onze winkel suikeroplossing aan. Omdat onze verenging begaan is met het wel en wee van de bijen is er (ook) biologisch geproduceerd suikeroplossing beschikbaar. Deze oplossing is duurder maar het gebruik ervan wordt door ons aangeraden. De aankoop van biologisch suikeroplossing gaat op bestelling dat wordt aangekondigd in de nieuwsbrief.',
            'img_url' => '',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '1'
        ]);

        DB::table('articles')->insert([
            'id' => 32,
            'page_id' => 10,
            'type' => 'Article',
            'title' => 'zBijenwas recyclen:',
            'subtitle' => '',
            'text' => 'De Leidse Imkersvereniging faciliteert voor haar leden het recyclen van eigen was. Hiervoor zijn stoom was-smelters (2x) en wasplaat persen (2x) te leen. Deze apparatuur kan worden opgehaald tijdens openingstijden van de winkel. Registratie is verplicht. In sommige gevallen zal er moeten worden gereserveerd in overleg met de depotbeheerder. De siliconen matten van de pers zijn kwetsbaar (!) en worden bij uitgifte en bij inname gecontroleerd op beschadigingen.',
            'img_url' => '',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '2'
        ]);

        DB::table('articles')->insert([
            'id' => 33,
            'page_id' => 10,
            'type' => 'Article',
            'title' => 'Honingslingeren:',
            'subtitle' => '',
            'text' => 'Onze vereniging heeft honingslingers (3x) beschikbaar die aan leden worden uitgeleend. Ook hier geldt dat de apparatuur kan worden opgehaald tijdens openingstijden van de winkel. Registratie is verplicht. In sommige gevallen zal er moeten worden gereserveerd in overleg met de depotbeheerder.',
            'img_url' => '',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '3'
        ]);

        DB::table('articles')->insert([
            'id' => 34,
            'page_id' => 10,
            'type' => 'Article',
            'title' => 'Openingstijden & adres:',
            'subtitle' => '',
            'text' => 'De winkel is open op zaterdagen van 13:00 tot 15:00 in periode Maart tot en met September. De winkel is ook geopend op imkeravonden van 19:30 tot 20:00. Adres winkel: Verenigingsgebouw Imkersvereniging Leiden en omstreken, gelegen op het terrein van de tuinvereniging ‘Cronesteyn, Boerenpad 3, 2322 LA te Leiden',
            'img_url' => '',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '4'
        ]);

        //fotos en videos
        DB::table('articles')->insert([
            'id' => 35,
            'page_id' => 12,
            'type' => 'Video',
            'title' => '',
            'subtitle' => '',
            'text' => '',
            'img_url' => 'https://www.imkersleiden.nl/wp-content/uploads/2020/04/VID-20200329-WA0000.mp4',
            'author' => 'Steven Kluft',
            'edit_permission_lvl' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            'pos' => '1'
        ]);
    }
}
