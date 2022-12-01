@extends('admin.layouts.primary')
@section('content')

    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Редактировать' }}
        </h1>
    </div>

    <form
        method="post"
        action="{{ route( 'posts.update', ['post' => $single] ) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')
        <input type="hidden" name="currentID" value="{{$single->id}}">
        <div class="form-group">
            <label for="title">
                Заголовок
            </label>
            <input class="form-control" type="text" name="title" id="title" value="{{old('title', $single->title)}}">
        </div>

        <div class="form-group">
            <label for="content">
                Контент
            </label>
            <textarea
                id="content"
                name="content"
                rows="5"
                cols="33"
            >{{old('content', $single->content)}}</textarea>
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
            >{{old('excerpt', $single->excerpt)}}</textarea>
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
            >{{old('keywords', $single->excerpt)}}</textarea>
        </div>


        <div class="form-group">
            <label for="image">
                Изображение
            </label>
            <input class="form-control" type="file" name="image" id="image">
        </div>

        <input class="btn btn-primary" type="submit" name="method" value="Применить">
        <input class="btn btn-primary" type="submit" name="method" value="Сохранить">
        <button class="btn btn-primary" onclick="history.back(); return false;">
            Назад
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
