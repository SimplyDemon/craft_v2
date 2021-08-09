@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Добавить' }}
        </h1>
    </div>

    <form method="post" action="<?= route( 'categories.store' ) ?>">
        @csrf
        <div class="form-group">
            <label for="name">
                Категория
            </label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name','')}}" required>
        </div>

        <div class="form-group">
            <label for="category_id">
                Родительская категория
            </label>
            <select class="form-control" name="category_id">
                {{--<option disabled hidden selected> Родительская категория</option>--}}
                <option value="">Без категории</option>
                @foreach($all as $item)
                    <option value="{{$item->id}}"
                            @if($item->name == 'Armor') selected @endif>
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">
            Создать
        </button>
    </form>
@endsection
