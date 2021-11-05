@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Все Обращения' }}
        </h1>
    </div>

    <div>
        <a href="{{ route( 'conversations.create' ) }}">
            Добавить еще
        </a>
    </div>
    @if ($all)
        <ul class="list-group">
            @foreach($all as $single)
                <li class="list-group-item">
                    <a href="{{ route( 'conversations.show', [ 'id' => $single->id ] ) }}">
                        {{$single->title}}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
