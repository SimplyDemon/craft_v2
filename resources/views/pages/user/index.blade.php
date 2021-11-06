@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Личный кабинет' }}
        </h1>
    </div>

    <section>
        <p>Email: {{$user->email}}</p>
        <p>Name: {{$user->name}}</p>
        <p><a href="{{route('user.price')}}">Цены</a></p>
        <p><a href="{{route('conversations.index')}}">Поддержка</a></p>
    </section>

@endsection
