@extends('admin.layouts.primary')
@section('content')

    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Все Рецепты' }}
        </h1>
    </div>

    <div>
        <a href="{{ route( 'recipes.create' ) }}">
            Добавить еще
        </a>
    </div>

    @if ($categories)
        <ul class="list-group">
            @foreach($categories as $single)
                <li class="list-group-item">
                    <a href="{{ route( 'categories.show', [ 'id' => $single->id ] ) }}">
                        {{$single->name}}
                    </a>

                    @if($single->subCategories)
                        <ul class="list-group">
                            @foreach( $single->subCategories as $subCategory)
                                <li class="list-group-item">
                                    <a href="{{ route( 'categories.show', [ 'id' => $subCategory->id ] ) }}">
                                        {{$subCategory->name}}
                                    </a>

                                    @if($subCategory->subCategories)
                                        <ul class="list-group">
                                            @foreach( $subCategory->subCategories as $subSubCategory)
                                                <li class="list-group-item">
                                                    <a href="{{ route( 'categories.show', [ 'id' => $subSubCategory->id ] ) }}">
                                                        {{$subSubCategory->name}}
                                                    </a>
                                                </li>
                                                @if($subSubCategory->recipes)
                                                    <ul class="list-group">
                                                        @foreach( $subSubCategory->recipes as $recipe)
                                                            <li class="list-group-item">
                                                                <img width="30px" src="{{asset('storage') . '/' . $recipe->img}}">
                                                                <a href="{{ route( 'recipes.show', [ 'id' => $recipe->id ] ) }}">
                                                                    {{$recipe->name}}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif

                                    @if($subCategory->recipes)
                                        <ul class="list-group">
                                            @foreach( $subCategory->recipes as $recipe)
                                                <li class="list-group-item">
                                                    <img width="30px" src="{{asset('storage') . '/' . $recipe->img}}">
                                                    <a href="{{ route( 'recipes.show', [ 'id' => $recipe->id ] ) }}">
                                                        {{$recipe->name}}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif

@endsection
