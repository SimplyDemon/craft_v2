@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Добавить' }}
        </h1>
    </div>

    <form method="post" action="{{ route( 'conversations.store' ) }}">
        @csrf
        <div class="form-group">
            <label for="title">
                Тема
            </label>
            <input class="form-control" type="text" name="title" id="title" value="{{old('title','')}}" required>
        </div>

        <button class="btn btn-primary">
            Создать
        </button>
    </form>
@endsection
