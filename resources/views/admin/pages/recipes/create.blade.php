@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Добавить' }}
        </h1>
    </div>

    <form method="post" action="<?= route( 'recipes.store' ) ?>">
        @csrf
        <div class="form-group">
            <label for="name">
                Рецепт
            </label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name','res')}}">
        </div>

        <div class="form-group">
            <label for="cost">
                Цена
            </label>
            <input class="form-control" type="number" name="cost" id="cost" value="{{old('cost','0')}}" min="0">
        </div>

        <div class="form-group">
            <label for="craft_cost">
                Цена крафта
            </label>
            <input class="form-control" type="number" name="craft_cost" id="craft_cost"
                   value="{{old('craft_cost','0')}}" min="0">
        </div>

        <div class="form-group">
            <label for="resource_id">
                Ресурс
            </label>
            <select class="form-control" name="resource_id" id="resource_id">
                <option value="" selected>
                    Не ресурс
                </option>
                @foreach($resources as $item)
                    <option value="{{$item->id}}">
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
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
            <label for="percent">
                Шанс крафта
            </label>
            <select class="form-control" name="percent" id="percent">
                @foreach($percentValues as $item)
                    <option value="{{$item}}" @if ($item == '100') selected @endif>
                        {{$item}}%
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

        <button class="btn btn-primary">
            Создать
        </button>
    </form>


@endsection
