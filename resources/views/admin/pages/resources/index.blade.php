@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Все Ресурсы' }}
        </h1>
    </div>

    <div>
        <a href="{{ route( 'resources.create' ) }}">
            Добавить еще
        </a>
    </div>

    @if (!$groupedTypes->isEmpty())
        @foreach($groupedTypes as $key => $type)
            <h4>{{$key}}</h4>
            <ul class="list-group">
                @foreach($type as $single)
                    <li class="list-group-item">
                        <a href="{{ route( 'resources.show', [ 'id' => $single->id ] ) }}">
                            {{$single->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    @endif


@endsection
