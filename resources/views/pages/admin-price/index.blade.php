@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Цены' }}
        </h1>
    </div>


    @if ($resources)

        <form method="post">
            @csrf
            @method('POST')
            <h2>Resources</h2>
            @include('pages.admin-price.table', [
                'all' => $resources,
                'prefix' => 'resources',
            ])

            <h2>Items</h2>
            @include('pages.admin-price.table', [
                'all' => $recipes,
                'prefix' => 'recipes',
            ])
            <button class="btn btn-primary">Сохранить</button>
        </form>
    @endif

@endsection
