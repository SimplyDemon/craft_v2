@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Редактировать' }}
        </h1>
    </div>

    <form method="POST" action="{{ route( 'resources.update', [ 'id' => $single->id ] ) }}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="currentID" value="{{$single->id}}">

        <div class="form-group">
            <label for="name">
                Название
            </label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name',$single->name)}}"
                   required>
        </div>

        <div class="form-group">
            <label for="cost">
                Цена
            </label>
            <input class="form-control" type="number" name="cost" id="cost" value="{{old('cost',$single->cost)}}"
                   min="1">
        </div>

        <div class="form-group">
            <label for="image">
                Изображение
            </label>
            <input class="form-control" type="file" name="image" id="image">
            @if (isset($single->img))
                <img src="{{asset('storage/' . $single->img)}}" width="100" height="100">
            @endif
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="method" value="Применить">
            <input class="btn btn-primary" type="submit" name="method" value="Сохранить">
            <button class="btn btn-primary" onclick="history.back(); return false;">
                Назад
            </button>
        </div>

    </form>


@endsection
