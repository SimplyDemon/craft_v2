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
            @foreach($categories as $singleCategory)
                <li class="list-group-item">
                    <a href="{{ route( 'categories.show', [ 'id' => $singleCategory->id ] ) }}">
                        {{$singleCategory->name}}
                    </a>

                    @foreach($all as $single)
                        @if($single->category_id == $singleCategory->id)
                            <div>
                                <a href="{{ route( 'recipes.show', [ 'id' => $single->id ] ) }}">
                                    {{$single->name}}
                                </a>
                            </div>
                        @endif
                    @endforeach

                    @if($singleCategory->subCategories)
                        <ul class="list-group">
                            @foreach( $singleCategory->subCategories as $subCategory)
                                <li class="list-group-item">
                                    <a href="{{ route( 'recipes.show', [ 'id' => $subCategory->id ] ) }}">
                                        {{$subCategory->name}}
                                    </a>

                                    @foreach($all as $single)
                                        @if($single->category_id == $subCategory->id)
                                            <div>
                                                <a href="{{ route( 'recipes.show', [ 'id' => $single->id ] ) }}">
                                                    {{$single->name}}
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif

@endsection
