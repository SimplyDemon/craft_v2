@extends('admin.layouts.primary')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Все Ресурсы
            </h1>
        </section>

        <section class="content container-fluid">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach


            @if (Session::has('message'))
                <li>{!! session('message') !!}</li>
            @endif

            <div>
                <a href="{{ route( 'resources.create' ) }}">Добавить еще</a>
            </div>
            <ul>

                @foreach($all as $single)
                    <li><a href="{{ route( 'resources.show', [ 'id' => $single->id ] ) }}">{{$single->name}}</a></li>
                @endforeach
            </ul>

        </section>
    </div>

@endsection