@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Добавить' }}
        </h1>
    </div>

    <form
        method="post"
        action="{{ route( 'posts.store' ) }}"
        enctype="multipart/form-data"
    >
        @csrf
        <div class="form-group">
            <label for="title">
                Контент
            </label>
            <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}">
        </div>

        <div class="form-group">
            <label for="content">
                Заголовок
            </label>
            <textarea
                id="content"
                name="content"
                rows="5"
                cols="33"
            >{{old('content')}}</textarea>
        </div>

        <div class="form-group">
            <label for="excerpt">
                Краткое описание
            </label>
            <textarea
                id="excerpt"
                name="excerpt"
                rows="5"
                cols="33"
            >{{old('excerpt')}}</textarea>
        </div>
        <div class="form-group">
            <label for="keywords">
                Ключевые слова
            </label>
            <textarea
                id="keywords"
                name="keywords"
                rows="5"
                cols="33"
            >{{old('keywords')}}</textarea>
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

@push('footer_scripts')
    <script defer>
        $(document).ready(function () {
            Laraberg.init('content');
        });
    </script>
@endpush
