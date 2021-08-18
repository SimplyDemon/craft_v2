@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Одиночная страница' }}
        </h1>
    </div>

    <ul class="list-group">
        <li class="list-group-item">
            Айди: {{$single->id}}
        </li>
        <li class="list-group-item">
            Название: <a
                href="{{route( $single->craft_item->getTable() . '.show', [ 'id' => $single->craft_item->id ] )}}">{{$single->craft_item->name}}</a>
        </li>
        <li class="list-group-item">
            Цена: {{$single->cost}}
        </li>
        <li class="list-group-item">
            Цена Крафта: {{$single->craft_cost}}
        </li>
        <li class="list-group-item">
            Процент: {{$single->percent}}
        </li>
        @if($single->craft_item->grade)
            <li class="list-group-item">
                Грейд: {{$single->craft_item->grade}}
            </li>
        @endif
        @if($single->craft_item->category_id)
            <li class="list-group-item">
                Айди категории: {{$single->craft_item->category_id}}
            </li>
        @endif
        @if($single->craft_item->type)
            <li class="list-group-item">
                Тип: {{$single->craft_item->type}}
            </li>
        @endif
        <li class="list-group-item">
            Дата создания: {{$single->created_at}}
        </li>
        <li class="list-group-item">
            Изображение: <img src="{{asset('storage/' . $single->craft_item->img)}}" width="100" height="100">
        </li>

        @if(!$single->resources->isEmpty())
            <h4>Крафт</h4>
            <ul>
                @foreach($single->resources as $recipeResource)
                    <li>
                        {{$recipeResource->name}} - {{$recipeResource->pivot->resource_quantity}}
                    </li>
                @endforeach
            </ul>
        @endif

    </ul>
    <form method="POST" action="{{ route( 'recipes.destroy', [ 'id' => $single->id ] ) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">
            Удалить
        </button>
    </form>

    <a href="{{ route( 'recipes.edit', [ 'id' => $single->id ] ) }}">
        Редактировать
    </a>

@endsection
