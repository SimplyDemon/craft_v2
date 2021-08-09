@extends('admin.layouts.primary')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Добавить
            </h1>
        </section>

        <section class="content container-fluid">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach


            @if (Session::has('message'))
                <li>{!! session('message') !!}</li>
            @endif
            <form method="post" action="<?= route( 'resources.store' ) ?>" enctype="multipart/form-data">
                @csrf
                <label for="name">Название</label><br>
                <input type="text" name="name" id="name" value="{{old('name','')}}" required><br>
                <label for="cost">Цена</label><br>
                <input type="number" name="cost" id="cost" value="{{old('cost','0')}}" min="0"><br>
                <label for="image">Изображение</label><br>
                <input type="file" name="image" id="image"><br>


                <br>
                <button>Создать</button>
            </form>
        </section>
    </div>

@endsection