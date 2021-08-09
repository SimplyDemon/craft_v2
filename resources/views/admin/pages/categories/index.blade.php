@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Все Категории' }}
        </h1>
    </div>

    <div>
        <a href="{{ route( 'categories.create' ) }}">
            Добавить еще
        </a>
    </div>
    @if ($all)
        <ul class="list-group">
            @foreach($all as $single)
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
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
@endsection
