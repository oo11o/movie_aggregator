@extends('layouts.index')
@section('content')
    <div class="row">
        <section id="content" class="col-lg-9 col-sm-12">
            @include('partials.content.index')
        </section>
        <aside id="sidebar" class="col-lg-3 col-sm-12">
            @include('partials.sidebar.index')
        </aside>
    </div>
    @yield('intro')
@endsection





