@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Поиск' }}
        </h1>
    </div>

    @if($search)
        <h2>Результаты поиска по запросу "{{$search}}"</h2>
    @endif

    @if($recipes)
        <ul class="list-group">
            @foreach($recipes as $recipe)
                <li class="list-group-item">
                    <img width="30px" src="{{asset('storage') . '/' . $recipe->img}}">
                    <a href="{{ route( 'recipes.show', [ 'id' => $recipe->id ] ) }}">
                        {{$recipe->name}}
                    </a>
                    @if($recipe->gradeImage)
                        <img src="{{$recipe->gradeImage}}">
                    @endif
                </li>
            @endforeach
        </ul>
    @endif

@endsection
