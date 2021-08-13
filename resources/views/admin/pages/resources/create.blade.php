@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Добавить' }}
        </h1>
    </div>
    <form method="post" action="<{{ route( 'resources.store' ) }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">
                Название
            </label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name','')}}" required>
        </div>

        <div class="form-group">
            <label for="cost">
                Цена
            </label>
            <input class="form-control" type="number" name="cost" id="cost" value="{{old('cost','0')}}" min="0">
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
