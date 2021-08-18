@extends('admin.layouts.primary')
@section('content')

    <script type="text/JavaScript">
        function createNewElement() {
            txtNewInputBox = '<select  class="form-control" name="resource_ids[]">\n' +
                '                    <option value="" selected>Не ресурс</option>\n' +
                '                    @foreach($resources as $item)\n' +
                '                        <option value="{{$item->id}}">{{$item->name}}</option>\n' +
                '                    @endforeach\n' +
                '                </select><input  class="form-control" type="number" name="resource_quantity[]" value="1" min="1">';

            document.getElementById("sd-repeater").insertAdjacentHTML('beforeend', txtNewInputBox);
        }
    </script>


    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Добавить' }}
        </h1>
    </div>

    <form method="post" action="{{ route( 'recipes.store' ) }}">
        @csrf

        <div class="form-group">
            <label for="cost">
                Цена
            </label>
            <input class="form-control" type="number" name="cost" id="cost" value="{{old('cost','0')}}" min="0">
        </div>

        <div class="form-group">
            <label for="craft_cost">
                Цена крафта
            </label>
            <input class="form-control" type="number" name="craft_cost" id="craft_cost"
                   value="{{old('craft_cost','0')}}" min="0">
        </div>

        <div class="form-group">
            <label for="resource_id">
                Ресурс
            </label>
            <select class="form-control" name="resource_id" id="resource_id">
                <option value="" selected>
                    Не ресурс
                </option>
                @foreach($resources as $item)
                    <option value="{{$item->id}}">
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="item_id">
                Вещь
            </label>

            <select class="form-control" name="item_id" id="item_id">
                <option value="" selected>
                    Не вещь
                </option>
                @foreach($items as $item)
                    <option value="{{$item->id}}">
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="percent">
                Шанс крафта
            </label>
            <select class="form-control" name="percent" id="percent">
                @foreach($percentValues as $item)
                    <option value="{{$item}}" @if ($item == '100') selected @endif>
                        {{$item}}%
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group" id="sd-repeater">
            <label for="resources">
                Ресурсы
            </label>
            <input class="form-control" type="button" value="Добавить ресурс" onclick="createNewElement();"/>
            <select class="form-control" name="resource_ids[]">
                @foreach($resources as $item)
                    <option value="{{$item->id}}">
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
            <input class="form-control" type="number" name="resource_quantity[]"
                   value="1" min="1">
        </div>

        <button class="btn btn-primary">
            Создать
        </button>
    </form>


@endsection
