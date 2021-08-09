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
            <form method="post" action="<?= route( 'recipes.store' ) ?>">
                @csrf
                <label for="name">Рецепт</label><br>
                <input type="text" name="name" id="name" value="{{old('name','res')}}"><br>
                <label for="cost">Цена</label><br>
                <input type="number" name="cost" id="cost" value="{{old('cost','0')}}" min="0"><br>

                <label for="craft_cost">Цена крафта</label><br>
                <input type="number" name="craft_cost" id="craft_cost" value="{{old('craft_cost','0')}}" min="0"><br>

                <label for="resource_id">Ресурс</label><br>
                <select name="resource_id" id="resource_id">
                    <option value="" selected>Не ресурс</option>
                    @foreach($resources as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select><br>

                <label for="category_id">Категория</label><br>
                <select name="category_id" id="category_id">
                    <option value="">Без категории</option>
                    @foreach($categories as $item)
                        <option value="{{$item->id}}"
                                @if ($item->name == 'Resource') selected @endif>{{$item->name}}</option>
                    @endforeach
                </select><br>

                <label for="percent">Шанс крафта</label><br>
                <select name="percent" id="percent">
                    @foreach($percentValues as $item)
                        <option value="{{$item}}" @if ($item == '100') selected @endif>{{$item}}%</option>
                    @endforeach
                </select><br>

                <label for="grade">Грейд</label><br>
                <select name="grade" id="grade">
                    @foreach($gradeValues as $item)
                        <option value="{{$item}}" @if ($item == 'none') selected @endif>{{$item}}</option>
                    @endforeach
                </select><br>


                <br>
                <button>Создать</button>
            </form>
        </section>
    </div>

@endsection