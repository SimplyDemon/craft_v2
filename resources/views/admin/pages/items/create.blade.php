@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Добавить' }}
        </h1>
    </div>

    <form method="post" action="{{ route( 'items.store' ) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">
                Вещь
            </label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name','')}}">
        </div>

        <div class="form-group">
            <label for="cost">
                Цена
            </label>
            <input class="form-control" type="number" name="cost" id="cost" value="{{old('cost','')}}" min="0">
        </div>

        <div class="form-group">
            <label for="rare_cost">
                Цена рарки
            </label>
            <input class="form-control" type="number" name="rare_cost" id="rare_cost" value="{{old('rare_cost','')}}"
                   min="0">
        </div>

        <div class="form-group">
            <label for="crystal_count">
                Количество кристаллов
            </label>
            <input class="form-control" type="number" name="crystal_count" id="crystal_count"
                   value="{{old('crystal_count','')}}" min="0">
        </div>

        <div class="form-group">
            <label for="category_id">
                Категория
            </label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">
                    Без категории
                </option>
                @foreach($categories as $item)
                    <option value="{{$item->id}}" @if ($item->name == 'Resource') selected @endif>
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="grade">
                Грейд
            </label>
            <select class="form-control" name="grade" id="grade">
                @foreach($gradeValues as $item)
                    <option value="{{$item}}" @if ($item == 'none') selected @endif>
                        {{$item}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="p_attack">
                p_attack
            </label>
            <input class="form-control" type="number" name="p_attack" id="p_attack" value="{{old('p_attack','')}}"
                   min="0">
        </div>

        <div class="form-group">
            <label for="m_attack">
                m_attack
            </label>
            <input class="form-control" type="number" name="m_attack" id="m_attack" value="{{old('m_attack','')}}"
                   min="0">
        </div>

        <div class="form-group">
            <label for="soul_shots_count">
                soul_shots_count
            </label>
            <input class="form-control" type="number" name="soul_shots_count" id="soul_shots_count"
                   value="{{old('soul_shots_count','')}}" min="0">
        </div>

        <div class="form-group">
            <label for="spirit_shots_count">
                spirit_shots_count
            </label>
            <input class="form-control" type="number" name="spirit_shots_count" id="spirit_shots_count"
                   value="{{old('spirit_shots_count','')}}" min="0">
        </div>

        <div class="form-group">
            <label for="p_def">
                p_def
            </label>
            <input class="form-control" type="number" name="p_def" id="p_def" value="{{old('p_def','')}}" min="0">
        </div>

        <div class="form-group">
            <label for="m_def">
                m_def
            </label>
            <input class="form-control" type="number" name="m_def" id="m_def" value="{{old('m_def','')}}" min="0">
        </div>

        <div class="form-group">
            <label for="image">
                Изображение
            </label>
            <input class="form-control" type="file" name="image" id="image">
        </div>

        <button class="btn btn-primary">
            Создать
        </button>
    </form>


@endsection
