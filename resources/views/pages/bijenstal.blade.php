@extends('pages.components.main')

@section('title', 'Bijenstal')


@section("body")
        <div class="container" style="margin: 50px auto 25px auto;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h1 class="text-warning font-weight-bold">{{ $article[0]->title }}</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <p class="text-white" style="font-size: 1.6em;">{{ $article[0]->text }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin: 25px auto;">
            <div class="row">
                <img class="col-md-12 rounded" src="https://www.imkersleiden.nl/wp-content/uploads/2020/01/image002.png" alt="">
            </div>
        </div>
@stop
