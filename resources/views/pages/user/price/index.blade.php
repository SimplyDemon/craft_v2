@extends('pages.user.main-template', ['title' => $title ?? 'Craft Calc'])
@section('user-content')
    @if ($resources && $recipes)

        <form method="post" action="{{route('user.price.update')}}">
            @csrf
            @method('POST')

            <h2>Resources</h2>
            @include('shared.price.table', [
                'all' => $resources,
                'prefix' => 'resources',
            ])

            <h2>Items</h2>
            @include('shared.price.table', [
                'all' => $recipes,
                'prefix' => 'recipes',
            ])
            <button class="btn btn-primary">Сохранить</button>
        </form>
    @endif

@endsection
