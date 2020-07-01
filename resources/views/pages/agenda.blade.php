@extends('pages.components.main')

@section('title', 'Agenda')

@section("body")
    <div class="container">
        <h1 class="text-white">Agenda</h1>
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
