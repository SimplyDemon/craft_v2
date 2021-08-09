@extends('admin.layouts.primary')
@section('content')

    <script type="text/JavaScript">
        function createNewElement() {
            txtNewInputBox = '<select name="resource_ids[]">\n' +
                '                    <option value="" selected>Не ресурс</option>\n' +
                '                    @foreach($resources as $item)\n' +
                '                        <option value="{{$item->id}}">{{$item->name}}</option>\n' +
                '                    @endforeach\n' +
                '                </select><input type="number" name="resource_quantity[]" value="1" min="1"><br>';

            document.getElementById("sd-repeater").insertAdjacentHTML('beforeend', txtNewInputBox);
        }
    </script>


    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Редактировать
            </h1>
        </section>

        <section class="content container-fluid">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach


            @if (Session::has('message'))
                <li>{!! session('message') !!}</li>
            @endif

            <form method="POST" action="{{ route( 'recipes.update', [ 'id' => $single->id ] ) }}">
                @csrf
                @method('PUT')

                <label for="name">Рецепт</label><br>
                <input type="text" name="name" id="name" value="{{old('name',$single->name)}}"><br>
                <label for="cost">Цена</label><br>
                <input type="number" name="cost" id="cost" value="{{old('cost',$single->cost)}}" min="0"><br>

                <label for="craft_cost">Цена крафта</label><br>
                <input type="number" name="craft_cost" id="craft_cost" value="{{old('craft_cost',$single->craft_cost)}}"
                       min="0"><br>

                <label for="resource_id">Ресурс</label><br>
                <select name="resource_id" id="resource_id">
                    <option value="" selected>Не ресурс</option>
                    @foreach($resources as $item)
                        <option value="{{$item->id}}"
                                @if (isset($single->resource_id) && $single->resource_id == $item->id) selected @endif >{{$item->name}}</option>
                    @endforeach
                </select><br>

                <label for="category_id">Категория</label><br>
                <select name="category_id" id="category_id">
                    <option value="">Без категории</option>
                    @foreach($categories as $item)
                        <option value="{{$item->id}}"
                                @if (isset($single->category_id) && $single->category_id == $item->id) selected @endif >{{$item->name}}</option>
                    @endforeach
                </select><br>

                <label for="percent">Шанс крафта</label><br>
                <select name="percent" id="percent">
                    @foreach($percentValues as $item)
                        <option value="{{$item}}" @if ($item == $single->percent) selected @endif>{{$item}}%</option>
                    @endforeach
                </select><br>

                <label for="grade">Грейд</label><br>
                <select name="grade" id="grade">
                    @foreach($gradeValues as $item)
                        <option value="{{$item}}" @if ($item == $single->grade) selected @endif>{{$item}}</option>
                    @endforeach
                </select><br>


                <div id="sd-repeater">
                    <label for="resources">Ресурсы</label><br>
                    <input type="button" value="Добавить ресурс" onclick="createNewElement();"/><br>
                    @foreach($recipeResources as $recipeResource)
                        <select name="resource_ids[]">
                            <option value="" selected>Не ресурс</option>
                            @foreach($resources as $item)
                                <option value="{{$item->id}}"
                                        @if ($item->id == $recipeResource->resource_id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select><input type="number" name="resource_quantity[]"
                                        value="{{$recipeResource->resource_quantity}}" min="1"><br>
                    @endforeach
                </div>

                <input type="hidden" name="currentID" value="{{$single->id}}">
                <input type="submit" name="method" value="Применить">
                <input type="submit" name="method" value="Сохранить">
                <button onclick="history.back(); return false;">Назад</button>
            </form>
        </section>
    </div>
    <br>
    <br>
    <br>
    <br>

@endsection
