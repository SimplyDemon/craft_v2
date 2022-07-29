@extends('layouts.app')
@section('content')
    @if(isset($title))
@section('title', $title)
@endif
<div class="nk-main">

    <div class="nk-box">
        <div class="container">
            <div class="nk-gap-5"></div>
            <h1 class="nk-title">{{ $title ?? 'Поиск' }}</h1>
            <div class="nk-gap-4"></div>
        </div>
    </div>

    <div class="container">

        @if($search)
            <h2>Результаты поиска по запросу "{{$search}}"</h2>
        @endif

        @if(!$recipes->isEmpty())
            <ul class="list-group">
                @foreach($recipes as $recipe)
                    <li class="list-group-item">
                        <img width="30" src="{{asset('storage') . '/' . $recipe->img}}" alt="img">
                        <a href="{{ route( 'recipes.show', [ 'id' => $recipe->id ] ) }}">
                            {{$recipe->name}}
                        </a>
                        @if($recipe->gradeImage)
                            <img src="{{$recipe->gradeImage}}" alt="grade">
                        @endif
                    </li>
                @endforeach
            </ul>
        @elseif($search)
            <h4>Ничего не нашли, попробуйте воспользоваться
                <a href="{{route('recipes.index')}}">каталогом предметов</a> с крутыми фильтрами!</h4>
        @endif

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>

</div>

@endsection
