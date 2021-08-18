@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Редактировать' }}
        </h1>
    </div>

    <a href="{{ route( 'categories.create' ) }}">
        Добавить еще
    </a>

    <form method="POST" action="{{ route( 'categories.update', [ 'id' => $single->id ] ) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="currentID" value="{{$single->id}}">

        <div class="form-group">
            <label for="name">
                Категория
            </label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name',$single->name)}}"
                   required>
        </div>

        <div class="form-group">
            <label for="category_id">
                Родительская категория
            </label>
            <select class="form-control" name="category_id">
                @if (empty($single->category_id))
                    <option value="" selected>
                        Без категории
                    </option>
                @endif
                @foreach($all as $item)
                    @if($item->id != $single->id)
                        <option value="{{$item->id}}"
                                @if($item->id == $single->category_id) selected @endif>
                            {{$item->name}}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>

        <input class="btn btn-primary" type="submit" name="method" value="Применить">
        <input class="btn btn-primary" type="submit" name="method" value="Сохранить">
        <button class="btn btn-primary" onclick="history.back(); return false;">
            Назад
        </button>
    </form>
@endsection
