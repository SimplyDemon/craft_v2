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
            Название: {{$single->name}}
        </li>
        <li class="list-group-item">
            Слаг: {{$single->slug}}
        </li>
        <li class="list-group-item">
            Цена: {{$single->cost}}
        </li>
        <li class="list-group-item">
            Цена рарки: {{$single->rare_cost}}
        </li>
        <li class="list-group-item">
            Количество кристаллов: {{$single->crystal_count}}
        </li>
        <li class="list-group-item">
            p_attack: {{$single->p_attack}}
        </li>
        <li class="list-group-item">
            m_attack: {{$single->m_attack}}
        </li>
        <li class="list-group-item">
            soul_shots_count: {{$single->soul_shots_count}}
        </li>
        <li class="list-group-item">
            spirit_shots_count: {{$single->spirit_shots_count}}
        </li>
        <li class="list-group-item">
            p_def: {{$single->p_def}}
        </li>
        <li class="list-group-item">
            m_def: {{$single->m_def}}
        </li>
        <li class="list-group-item">
            Ссылка на изображение: {{$single->img}}
        </li>
        <li class="list-group-item">
            Изображение: <img src="{{asset('storage/' . $single->img)}}" width="100" height="100">
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
    <form method="POST" action="{{ route( 'items.destroy', [ 'id' => $single->id ] ) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">
            Удалить
        </button>
    </form>

    <a href="{{ route( 'items.edit', [ 'id' => $single->id ] ) }}">
        Редактировать
    </a>



@endsection
