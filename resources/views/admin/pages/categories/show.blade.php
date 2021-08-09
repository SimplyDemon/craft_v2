@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">{{ $title ?? 'Одиночная страница' }}</h1>
    </div>

    <ul class="list-group">
        <li class="list-group-item">
            Айди: {{$single->id}}
        </li>
        <li class="list-group-item">
            Название: {{$single->name}}
        </li>
        <li class="list-group-item">
            Слаг: {{$single->slug}}
        </li>
        <li class="list-group-item">
            Дата создания: {{$single->created_at}}
        </li>

        <form method="POST" action="{{ route( 'categories.destroy', [ 'id' => $single->id ] ) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary mb-2">Удалить</button>
        </form>

        <a href="{{ route( 'categories.edit', [ 'id' => $single->id ] ) }}">Редактировать</a>


    </ul>

@endsection
