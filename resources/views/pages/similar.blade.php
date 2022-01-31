@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{$post[0]['h1']}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <img src="{{$post[0]['poster']}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            {!! $post[0]['intro'] !!}
        </div>
    </div>
    @foreach($post as $film)
        <section class="film pb-4 mb-5">
        <div class="row mb-3">
            <div class="col-lg-12">
                <h2>{{$film['name']}}</h2>
                @if($film['name_original'])
                    <div>({{$film['name_original']}})</div>
                @endif
                @if($film['info_tagline'])
                    <div>{{$film['info_tagline']}}</div>
                @endif
            </div>

        </div>
        <div class="row pb-3">
            <div class="col-lg-4">
                <img width="240px" src="/image/film/{{$film['image_webp']}}" alt="">
            </div>
            <div class="col-lg-8">
                <div><strong>Кинопоиск:</strong> {{$film['kinopoisk']/1000}}</div>
                <div><strong>IMDb:</strong> {{$film['imdb']/1000}}</div>
                <hr/>
                <div><strong>Год:</strong> {{$film['info_year']}}</div>
                <div><strong>Страна:</strong> {{$film['info_country']}}</div>
                <div><strong>Страна:</strong> {{$film['info_genre']}}</div>
                <div><strong>Aктёры:</strong></div>

                @foreach(json_decode($film['actor']) as $item)
                    {{$item->name}}
                    @if($loop->last > $loop->index)
                        ,
                    @endif
                @endforeach
                <div><strong>Бюджет: {{$film['info_budget_currency']}} {{$film['info_budget']}}</strong></div>

            </div>
        </div>
        <section class="row" style="font-size: 1.1rem">
            <div class="col-lg-12"> {{$film['description']}}</div>
        </section>
        </section>
    @endforeach
@endsection('content')
