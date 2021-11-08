@extends('layouts.app')
@section('content')

    <div class="nk-main">

        <!-- START: Header Title -->
        <div class="nk-box">
            <div class="container">
                <div class="nk-gap-5"></div>
                <h1 class="nk-title">{{ $title ?? 'Цены админа' }}</h1>
                <div class="nk-gap-4"></div>
            </div>
        </div>
        <!-- END: Header Title -->

        <div class="container">
            @if ($resources && $recipes)
                <form method="post">
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

            <div class="nk-gap-4"></div>
            <div class="nk-gap-3"></div>
        </div>

    </div>

@endsection
