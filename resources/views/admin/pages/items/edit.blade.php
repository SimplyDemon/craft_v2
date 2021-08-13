@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Редактировать' }}
        </h1>
    </div>

    <form method="POST" action="{{ route( 'items.update', ['id' => $single->id] ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="currentID" value="{{$single->id}}">
        <div class="form-group">
            <label for="name">
                Вещь
            </label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name',$single->name)}}">
        </div>

        <div class="form-group">
            <label for="cost">
                Цена
            </label>
            <input class="form-control" type="number" name="cost" id="cost" value="{{old('cost',$single->cost)}}"
                   min="0">
        </div>

        <div class="form-group">
            <label for="rare_cost">
                Цена рарки
            </label>
            <input class="form-control" type="number" name="rare_cost" id="rare_cost"
                   value="{{old('rare_cost',$single->rare_cost)}}" min="0">
        </div>

        <div class="form-group">
            <label for="crystal_count">
                Количество кристаллов
            </label>
            <input class="form-control" type="number" name="crystal_count" id="crystal_count"
                   value="{{old('crystal_count',$single->crystal_count)}}" min="0">
        </div>

        <div class="form-group">
            <label for="category_id">
                Категория
            </label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">
                    Без категории
                </option>
                @foreach($categories as $item)
                    <option value="{{$item->id}}"
                            @if (isset($single->category_id) && $single->category_id == $item->id) selected @endif>
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="grade">
                Грейд
            </label>
            <select class="form-control" name="grade" id="grade">
                @foreach($gradeValues as $item)
                    <option value="{{$item}}" @if ($item == $single->grade) selected @endif>
                        {{$item}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="p_attack">
                p_attack
            </label>
            <input class="form-control" type="number" name="p_attack" id="p_attack"
                   value="{{old('p_attack',$single->p_attack)}}" min="0">
        </div>

        <div class="form-group">
            <label for="m_attack">
                m_attack
            </label>
            <input class="form-control" type="number" name="m_attack" id="m_attack"
                   value="{{old('m_attack',$single->m_attack)}}" min="0">
        </div>

        <div class="form-group">
            <label for="soul_shots_count">
                soul_shots_count
            </label>
            <input class="form-control" type="number" name="soul_shots_count" id="soul_shots_count"
                   value="{{old('soul_shots_count',$single->soul_shots_count)}}" min="0">
        </div>

        <div class="form-group">
            <label for="spirit_shots_count">
                spirit_shots_count
            </label>
            <input class="form-control" type="number" name="spirit_shots_count" id="spirit_shots_count"
                   value="{{old('spirit_shots_count',$single->spirit_shots_count)}}" min="0">
        </div>

        <div class="form-group">
            <label for="p_def">
                p_def
            </label>
            <input class="form-control" type="number" name="p_def" id="p_def" value="{{old('p_def',$single->p_def)}}"
                   min="0">
        </div>

        <div class="form-group">
            <label for="m_def">
                m_def
            </label>
            <input class="form-control" type="number" name="m_def" id="m_def" value="{{old('m_def',$single->m_def)}}"
                   min="0">
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

        <input class="btn btn-primary" type="submit" name="method" value="Применить">
        <input class="btn btn-primary" type="submit" name="method" value="Сохранить">
        <button class="btn btn-primary" onclick="history.back(); return false;">
            Назад
        </button>
    </form>






@endsection
