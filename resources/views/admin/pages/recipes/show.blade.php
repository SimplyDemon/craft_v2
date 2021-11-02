@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Одиночная страница' }}
        </h1>
    </div>
    <?php
    $recipePriceSell = $user->recipes->find( $single->id ) && $user->recipes->find( $single->id )->pivot->price_sell ? $user->recipes->find( $single->id )->pivot->price_sell : $single->price_sell;
    ?>
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
            Цена: {{$recipePriceSell}}
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
        <li class="list-group-item">
            Шанс рара: {{$single->rare_chance}}%
        </li>
    </ul>
    <?php
    $masterWorkText = 'Crafter level <b>85</b><br>';
    $masterWorkText .= 'Chance: <b>' . $single->rare_chance . '</b>%';

    if ( $single->masterwork_name ) {
        $masterWorkText .= '<br>' . $single->masterwork_name;
    }
    if ( $single->masterwork_description ) {
        $masterWorkText .= '<br>' . $single->masterwork_description;
    }
    ?>
    <h1>{{$single->name}}</h1>

    <h3>
        <img width="50px" src="{{asset('storage') . '/' . $single->img}}">
        @if($single->gradeImage)
            <img src="{{$single->gradeImage}}">
        @endif
        @if($single->rare_chance)
            <span style="font-size: 10px;" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$masterWorkText}}">Masterwork</span>
        @endif
        Цена: {{number_format($recipePriceSell, 0, ' ', ' ')}}
    </h3>
    @if($single)
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
            <?php
            $total = 0;
            $totalAdminPrice = 0;
            $tooltipImagePathRegular = public_path() . '/question.svg';
            $tooltipImagePathColored = public_path() . '/question-colored.svg';
            ?>
            @foreach($single->resources as $resource)
                <tr>
                    <?php
                    $resourceQuantity = $resource->pivot->resource_quantity;
                    $adminResourcePriceSell = $resource->price_sell;
                    $resourcePrice = $user->resources->find( $resource->id ) && $user->resources->find( $resource->id )->pivot->price_sell ? $user->resources->find( $resource->id )->pivot->price_sell : $adminResourcePriceSell;
                    $resourceLinePrice = $resourcePrice * $resourceQuantity;
                    $total += $resourceLinePrice;

                    $resourceAdminLinePrice = $adminResourcePriceSell * $resourceQuantity;
                    $totalAdminPrice += $resourceAdminLinePrice;
                    $tooltipResourcePriceImg = $adminResourcePriceSell === $resourcePrice ? $tooltipImagePathColored : $tooltipImagePathRegular;
                    $tooltipResourcePriceText = 'Цена по умолчанию:<br><b>' . number_format( $adminResourcePriceSell, 0, ' ', ' ' ) . '</b>';
                    $tooltipLinePriceText = 'Цена по умолчанию:<br><b>' . number_format( $resourceAdminLinePrice, 0, ' ', ' ' ) . '</b>';

                    ?>
                    <td>
                        <img width="30px" src="{{asset('storage') . '/' . $resource->img}}">{{$resource->name}}
                    </td>
                    <td>
                        {{$resourceQuantity}}
                    </td>
                    <td>
                        <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipResourcePriceText}}">
                            {!! file_get_contents( $tooltipResourcePriceImg) !!}
                        </span>
                        {{number_format($resourcePrice, 0, ' ', ' ')}}
                    </td>
                    <td>
                        <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipLinePriceText}}">
                            {!! file_get_contents( $tooltipResourcePriceImg) !!}
                        </span>
                        {{number_format($resourceLinePrice, 0, ' ', ' ') }}
                    </td>
                </tr>
            @endforeach
            <?php
            $totalAdminPriceText = 'Цена по умолчанию:<br><b>' . number_format( $totalAdminPrice, 0, ' ', ' ' ) . '</b>';
            $tooltipAdminTotalPriceImg = $totalAdminPrice === $total ? $tooltipImagePathColored : $tooltipImagePathRegular;
            ?>
            <tr>
                <td colspan="3">
                    <b>Итого:</b>
                </td>
                <td>
                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$totalAdminPriceText}}">
                        {!! file_get_contents($tooltipAdminTotalPriceImg) !!}
                    </span>
                    <b>{{number_format($total, 0, ' ', ' ')}}</b>
                </td>
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
            <?php
            $total = 0;
            $totalAdminPrice = 0;
            ?>
            @foreach($single->resources as $resource)
                <tr>
                    <?php
                    $resourceQuantity = $resource->pivot->resource_quantity;
                    $adminResourcePriceBuy = $resource->price_buy;
                    $resourcePrice = $user->resources->find( $resource->id ) && $user->resources->find( $resource->id )->pivot->price_buy ? $user->resources->find( $resource->id )->pivot->price_buy : $adminResourcePriceBuy;
                    $resourceLinePrice = $resourcePrice * $resourceQuantity;
                    $total += $resourceLinePrice;

                    $resourceAdminLinePrice = $adminResourcePriceBuy * $resourceQuantity;
                    $totalAdminPrice += $resourceAdminLinePrice;
                    $tooltipResourcePriceImg = $adminResourcePriceBuy === $resourcePrice ? $tooltipImagePathColored : $tooltipImagePathRegular;
                    $tooltipResourcePriceText = 'Цена по умолчанию:<br><b>' . number_format( $adminResourcePriceBuy, 0, ' ', ' ' ) . '</b>';
                    $tooltipLinePriceText = 'Цена по умолчанию:<br><b>' . number_format( $resourceAdminLinePrice, 0, ' ', ' ' ) . '</b>';
                    ?>
                    <td>
                        <img width="30px" src="{{asset('storage') . '/' . $resource->img}}">{{$resource->name}}
                    </td>
                    <td>
                        {{$resourceQuantity}}
                    </td>
                    <td>
                        <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipResourcePriceText}}">
                            {!! file_get_contents( $tooltipResourcePriceImg) !!}
                        </span>
                        {{number_format($resourcePrice, 0, ' ', ' ')}}
                    </td>
                    <td>
                        <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipLinePriceText}}">
                            {!! file_get_contents( $tooltipResourcePriceImg) !!}
                        </span>
                        {{number_format($resourceLinePrice, 0, ' ', ' ') }}
                    </td>
                </tr>
            @endforeach
            <?php
            $totalAdminPriceText = 'Цена по умолчанию:<br><b>' . number_format( $totalAdminPrice, 0, ' ', ' ' ) . '</b>';
            $tooltipAdminTotalPriceImg = $totalAdminPrice === $total ? $tooltipImagePathColored : $tooltipImagePathRegular;
            ?>
            <tr>
                <td colspan="3">
                    <b>Итого:</b>
                </td>
                <td>
                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$totalAdminPriceText}}">
                        {!! file_get_contents($tooltipAdminTotalPriceImg) !!}
                    </span>
                    <b>{{number_format($total, 0, ' ', ' ')}}</b>
                </td>
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

@push('footer_scripts')
    <script type="text/javascript">
        $( function() {

            $( '[data-toggle="tooltip"]' ).tooltip()
        } )
    </script>
@endpush
