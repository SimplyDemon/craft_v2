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



    @if (!$categories->isEmpty() && !empty($groupedItemRecipes))
        <h4>Вещи</h4>
        <ul class="list-group">
            @foreach($categories as $singleCategory)
                <li class="list-group-item">
                    <a href="{{ route( 'categories.show', [ 'id' => $singleCategory->id ] ) }}">
                        {{$singleCategory->name}}
                    </a>
                    @if(isset($groupedItemRecipes[$singleCategory->id]))
                        <ul class="list-group">
                            @foreach($groupedItemRecipes[$singleCategory->id] as $single)
                                <li class="list-group-item">
                                    <a href="{{ route( 'recipes.show', [ 'id' => $single->id ] ) }}">
                                        {{$single->craft_item->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @if($singleCategory->subCategories)
                        <ul class="list-group">
                            @foreach( $singleCategory->subCategories as $subCategory)
                                <li class="list-group-item">
                                    <a href="{{ route( 'categories.show', [ 'id' => $subCategory->id ] ) }}">
                                        {{$subCategory->name}}
                                    </a>

                                    @if(isset($groupedItemRecipes[$subCategory->id]))
                                        <ul class="list-group">
                                            @foreach($groupedItemRecipes[$subCategory->id] as $single)
                                                <li class="list-group-item">
                                                    <a href="{{ route( 'recipes.show', [ 'id' => $single->id ] ) }}">
                                                        {{$single->craft_item->name}}
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

    @if(!$resourceRecipes->isEmpty())
        <h4>Ресурсы</h4>
        <ul class="list-group">
            @foreach($resourceRecipes as $single)
                <li class="list-group-item">
                    <a href="{{ route( 'recipes.show', [ 'id' => $single->id ] ) }}">
                        {{$single->craft_item->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
