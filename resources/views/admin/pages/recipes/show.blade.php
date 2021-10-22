@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Одиночная страница' }}
        </h1>
    </div>

    <ul class="list-group">
        <li class="list-group-item">
            Айди: {{$single->id}}
        </li>
        <li class="list-group-item">
            Название: {{$single->name}}
        </li>
        <li class="list-group-item">
            Слаг: {{$single->slug}}
        </li>
        <li class="list-group-item">
            Цена: {{$single->price_sell}}
        </li>
        <li class="list-group-item">
            Цена Крафта: {{$single->craft_cost}}
        </li>
        <li class="list-group-item">
            Ссылка на изображение: {{$single->img}}
        </li>
        <li class="list-group-item">
            Процент: {{$single->percent}}
        </li>
        <li class="list-group-item">
            Грейд: {{$single->grade}}
        </li>
        <li class="list-group-item">
            Айди категории: {{$single->category_id}}
        </li>
        <li class="list-group-item">
            Дата создания: {{$single->created_at}}
        </li>
    </ul>

    <h1>{{$single->name}}</h1>
    <h3>
        <img width="50px" src="{{asset('storage') . '/' . $single->img}}"> Цена: {{number_format($single->price_sell, 0, ' ', ' ')}}
    </h3>
    @if($recipeResources)
        <h2>Закупка ресурсов у торговцев</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Ресурс</th>
                <th scope="col">Количество</th>
                <th scope="col">Цена за штуку</th>
                <th scope="col">Цена за все</th>
            </tr>
            </thead>
            <tbody>
            <?php $total = 0; ?>
            @foreach($recipeResources as $recipeResource)
                <tr>
                    <?php
                    $resourceId = $recipeResource->resource_id;
                    $resource = \App\Models\Resource::FindOrFail( $resourceId );
                    $recipeId = $recipeResource->recipe_id;
                    $resourceQuantity = $recipeResource->resource_quantity;
                    $resourcePrice = $resource->price_sell;
                    $resourceLinePrice = $resourcePrice * $resourceQuantity;
                    $total += $resourceLinePrice;
                    ?>
                    <td><img width="30px" src="{{asset('storage') . '/' . $resource->img}}">{{$resource->name}}</td>
                    <td>{{$resourceQuantity}}</td>
                    <td>{{number_format($resourcePrice, 0, ' ', ' ')}}</td>
                    <td>{{number_format($resourceLinePrice, 0, ' ', ' ') }}</td>

                </tr>
            @endforeach
            <tr>
                <td colspan="3"><b>Итого:</b></td>
                <td><b>{{number_format($total, 0, ' ', ' ')}}</b></td>
                <?php unset( $total ) ?>
            </tr>
            </tbody>
        </table>

        <h2>Сесть на закупку ресурсов</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Ресурс</th>
                <th scope="col">Количество</th>
                <th scope="col">Цена за штуку</th>
                <th scope="col">Цена за все</th>
            </tr>
            </thead>
            <tbody>
            <?php $total = 0; ?>
            @foreach($recipeResources as $recipeResource)
                <tr>
                    <?php
                    $resourceId = $recipeResource->resource_id;
                    $resource = \App\Models\Resource::FindOrFail( $resourceId );
                    $recipeId = $recipeResource->recipe_id;
                    $resourceQuantity = $recipeResource->resource_quantity;
                    $resourcePrice = $resource->price_buy ?? $resource->price_sell;
                    $resourceLinePrice = $resourcePrice * $resourceQuantity;
                    $total += $resourceLinePrice;
                    ?>
                    <td><img width="30px" src="{{asset('storage') . '/' . $resource->img}}">{{$resource->name}}</td>
                    <td>{{$resourceQuantity}}</td>
                    <td>{{number_format($resourcePrice, 0, ' ', ' ')}}</td>
                    <td>{{number_format($resourceLinePrice, 0, ' ', ' ') }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3"><b>Итого:</b></td>
                <td><b>{{number_format($total, 0, ' ', ' ')}}</b></td>
            </tr>
            </tbody>
        </table>
    @endif

    <form method="POST" action="{{ route( 'recipes.destroy', [ 'id' => $single->id ] ) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">
            Удалить
        </button>
    </form>

    <a href="{{ route( 'recipes.edit', [ 'id' => $single->id ] ) }}">
        Редактировать
    </a>

@endsection
