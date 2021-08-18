@extends('admin.layouts.primary')
@section('content')

    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Все Вещи' }}
        </h1>
    </div>

    <div>
        <a href="{{ route( 'items.create' ) }}">
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

                    @if(isset($groupedItems[$singleCategory->id]))
                        <ul class="list-group">
                            @foreach($groupedItems[$singleCategory->id] as $single)
                                <li class="list-group-item">
                                    <a href="{{ route( 'items.show', [ 'id' => $single->id ] ) }}">
                                        {{$single->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @if($singleCategory->subCategories)
                        <ul class="list-group">
                            @foreach( $singleCategory->subCategories as $subCategory)
                                <li class="list-group-item">
                                    <a href="{{ route( 'recipes.show', [ 'id' => $subCategory->id ] ) }}">
                                        {{$subCategory->name}}
                                    </a>

                                    @if(isset($groupedItems[$subCategory->id]))
                                        <ul class="list-group">
                                            @foreach($groupedItems[$subCategory->id] as $single)
                                                <li class="list-group-item">
                                                    <a href="{{ route( 'items.show', [ 'id' => $single->id ] ) }}">
                                                        {{$single->name}}
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
