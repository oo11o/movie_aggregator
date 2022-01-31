@extends('layouts/default')

@section('title', 'Подобрать фильмы | Kinopodborka.com')
@section('description', ' 1 Page Title')
@section('content')
    @foreach($posts as $post)
        <div class="post-content">
            <figure class="icon-overlay icn-link post-media">
                <a href="{{$post['url']}}"><span class="icn-more"></span>
                    <img src="{{$post['poster']}}" class="img-fluid" alt="">
                </a>
            </figure>

            <h2 class="post-title"><a href="{{$post['url']}}">{{$post['h1']}}</a></h2>
{{--            <ul class="meta">--}}
{{--                <li class="categories"><a href="#">Photography</a></li>--}}
{{--                <li class="comments"><a href="#">63</a></li>--}}
{{--                <li class="likes">--}}
{{--                    <a href="#">114</a></li>--}}
{{--            </ul>--}}
            <p>{{$post['description']}}
            </p><a href="{{$post['url']}}" class="btn  btn-dark btn-lg">Подробно</a>
        </div>
    @endforeach
    <div class="row">
        <div id="intro" class="col-lg-12 col-sm-12">
            {{--<div class="row">--}}
            {{--    <section id="content" class="col-lg-9 col-sm-12">--}}
            {{--        @include('partials.content.index')--}}
            {{--    </section>--}}
            {{--    <aside id="sidebar" class="col-lg-3 col-sm-12">--}}
            {{--        @include('partials.sidebar.index')--}}
            {{--    </aside>--}}
            {{--</div>--}}

            <p>
            <h1>Kinopodborka - агрегатор кино, сборник фильмов</h1>
            </p>

            <p>
                Сайт KinoPodborka.сom - ресурс коллекции по таким категориям:
            </p>

            <p>
            <ul>
                <li>Похожее по тематике.</li>
                <li>Похожее фильмы.</li>
                <li>Подборки по жанру.</li>
                <li>Лучшие фильмы актеров.</li>
            </ul>
            </p>

            <p>
                Отбор фильмов формируется частично автоматически, частично через модерацию. Формула может изменятся и с
                течением времени а списки ранее выбранного кино отличаться, также пользователи могут влиять на алгоритм
                формирования и добавлять свои рекомендации.
            </p>


        </div>
    </div>
@endsection

{{--@section('title', 'Page Title')--}}

{{--@section('content')--}}
{{--    @include('layouts.content')--}}
{{--@stop--}}

{{--@section('sidebar')--}}
{{--    @parent--}}
{{--    <p>This is appended to the master sidebar.</p>--}}
{{--@stop--}}


