@extends('pages.components.main')

@section('title', 'Activiteiten')

@section("body")
{{--    <div class="container rounded" style="margin: 50px auto 25px auto;">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 pt-2">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h1 class="text-warning pt-2 font-weight-bold">Activiteiten</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h2 class="pt-5 text-warning">Koninginneteelt</h2>--}}
{{--                    <p style="font-size: 1.6em;" class="text-white">--}}
{{--                        Het imkeren in Nederland en meer specifiek in de stad vraagt om een type bij dat zachtaardig is: je wilt geen ruzie met de buren omdat ze last hebben van je bijen. We hebben een werkgroep die aan koninginnenteelt doet en ieder jaar naar Ameland gaat. We komen bij elkaar voor de start van de teelt en bespreken de aanpak van het teeltseizoen. We helpen elkaar met kennis, en als er iets fout gaat helpen we om toch moeren te kunnen zenden naar het bevruchtingsstation. Wij gebruiken Buckfast-moeren als startpunt, waar we larven en eitjes van verzamelen om verder te telen. De moeren zijn allen P-moeren, dus bevrucht door zuivere Buckfast darren.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 pt-5">--}}
{{--                <div class="col-md-12 pt-5">--}}
{{--                    <img class="rounded" src="https://www.imkersleiden.nl/wp-content/uploads/2019/07/Voorbeeld-nieuws.jpg" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="col-md-12">--}}
{{--                    <p style="font-size: 1.6em;" class="text-white">Ieder jaar is het weer een uitdaging om mooie moeren te kweken, het enthousiasme is groot en we leren er iedere keer veel van.</p>--}}
{{--                    <p style="font-size: 1.6em;" class="text-white">De kosten die hiermee gemoeid zijn worden omgeslagen over het aantal moeren waarmee men wil deelnemen en bedragen rond de 25 euro per moer. Je zorgt wel voor eigen kastjes om naar Ameland te gaan.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container rounded" style="margin: 25px auto;">--}}
{{--        <div class="row" style="">--}}
{{--            <div class="col-md-12 m-2 pt-3 rounded" style="background-color: gold">--}}
{{--                <div class="col-md-12">--}}
{{--                    <p class="" style="font-size: 1.6em;">Mocht u geen lid van de NBV en de afdeling Leiden willen worden, maar de vereniging en haar doelen wel een warm hart toedragen, dan kunt u vanaf 15,- euro per jaar ook donateur worden. U kunt dan meedoen met activiteiten, imkersbenodigdheden lenen en ontvangt nieuwsbrieven. U heeft geen inspraak als lid in de vereniging. Wilt u donateur worden, stuur dan een mail met uw naam, adres en telefoonnummer naar leidsebijen@live.nl en wij zorgen dat u donateur wordt.</></p></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container">
        <h1 class="text-white">Activiteiten</h1>
        @foreach($articles as $article)
            @if($article->type === 'Alert')
                <div class="card text-black-50 bg-warning mb-3">
                    <div class="card-header">Alert</div>
                    <div class="card-body">
                        <h5 class="card-title text-black">{{ $article->title }}</h5>
                        <p class="card-text">{!! $article->text !!}</p>
                    </div>
                </div>
            @endif
            @if($article->type === 'Article')
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        @if(!empty($article->subtitle))
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                        @endif
                        <p class="card-text">{!! $article->text !!}</p>
                    </div>
                </div>
            @endif
            @if($article->type === 'Side_img_card')
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset($article->img_url) }}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{!! $article->text !!}</p>
                                <p class="card-text"><small class="text-muted">{{ $article->updated_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@stop
