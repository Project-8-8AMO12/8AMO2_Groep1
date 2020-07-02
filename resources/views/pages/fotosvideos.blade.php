@extends('pages.components.main')

@section('title', "Foto's en Video's")


@section("body")
<div class="container">
    <h1 class="text-white">Foto's en Video's</h1>
    @foreach($articles as $article)
        @if($article->type === 'Foto')
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    @if(!empty($article->subtitle))
                        <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                    @endif
                    <p class="card-text">{!! $article->text !!}</p>
                </div>
                <div>
                    <img src="{{ asset($article->img_url) }}" class="card-img" alt="...">
                </div>
            </div>
        @endif
            @if($article->type === 'Video')
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        @if(!empty($article->subtitle))
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                        @endif
                        <p class="card-text">{!! $article->text !!}</p>
                    </div>
                    <div>
                        <video width="720" height="576" controls>
                            <source src="{{ asset($article->img_url) }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            @endif
    @endforeach
</div>
@stop
