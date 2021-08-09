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
            Цена: {{$single->cost}}
        </li>
        <li class="list-group-item">
            Цена Крафта: {{$single->craft_cost}}
        </li>
        <li class="list-group-item">
            Ссылка на изображение: {{$single->img}}
        </li>
        <li class="list-group-item">
            Процент: {{$single->percent}}
        </li>
        <li class="list-group-item">
            Грейд: {{$single->grade}}
        </li>
        <li class="list-group-item">
            Айди категории: {{$single->category_id}}
        </li>
        <li class="list-group-item">
            Дата создания: {{$single->created_at}}
        </li>

    </ul>
    <form method="POST" action="{{ route( 'recipes.destroy', [ 'id' => $single->id ] ) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">Удалить</button>
    </form>

    <a href="{{ route( 'recipes.edit', [ 'id' => $single->id ] ) }}">Редактировать</a>



@endsection
