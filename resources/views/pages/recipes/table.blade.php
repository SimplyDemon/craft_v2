<?php
$total = 0;
$totalAdminPrice = 0;
$tooltipResourcePriceImg = public_path() . '/question.svg';
?>
<table class="table recipe">
    <thead>
    <tr>
        <th scope="col">Ресурс</th>
        <th scope="col">Кол</th>
        <th scope="col">В наличии</th>
        <th scope="col">Цена за штуку</th>
        <th scope="col">Цена за все</th>
        <th scope="col">Исклю-<br>чить</th>
    </tr>
    </thead>
    <tbody>
    @foreach($single->resources as $resource)
        <tr>
            <?php
            $resourceQuantity = $resource->pivot->resource_quantity;
            $adminResourcePrice = $resource->$price;
            $resourcePrice = isset( $user ) && $user->resources->find( $resource->id ) && $user->resources->find( $resource->id )->pivot->$price ? $user->resources->find( $resource->id )->pivot->$price : $adminResourcePrice;
            $resourceLinePrice = $resourcePrice * $resourceQuantity;
            $total += $resourceLinePrice;

            $resourceAdminLinePrice = $adminResourcePrice * $resourceQuantity;
            $totalAdminPrice += $resourceAdminLinePrice;
            $isPriceDifferent = $adminResourcePrice !== $resourcePrice;
            $tooltipResourcePriceText = 'Цена по умолчанию:<br><b>' . number_format( $adminResourcePrice, 0, ' ', ' ' ) . '</b>';
            $tooltipLinePriceText = 'Цена по умолчанию:<br><b>' . number_format( $resourceAdminLinePrice, 0, ' ', ' ' ) . '</b>';
            ?>
            <td>
                <img width="30" src="{{asset('storage') . '/' . $resource->img}}" alt="resource">{{$resource->name}}
            </td>
            <td data-quantity="{{$resourceQuantity}}" data-quantity-base="{{$resourceQuantity}}">
                {{$resourceQuantity}}
            </td>
            <td class="td-has" data-has="0">
                <input class="form-control" type="number" step="1" min="0" max="{{$resourceQuantity}}" value="0">
            </td>
            <td class="td-price" data-price="{{$resourcePrice}}">
                <input class="form-control" type="number" step="1" min="0" value="{{$resourcePrice ?? 0}}">
                @if($isPriceDifferent)
                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipResourcePriceText}}">
                                        {!! file_get_contents( $tooltipResourcePriceImg) !!}
                                    </span>
                @endif
            </td>
            <td data-total="{{$resourceLinePrice}}">
                {{number_format($resourceLinePrice, 0, ' ', ' ') }}
                @if($isPriceDifferent)
                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipLinePriceText}}">
                        {!! file_get_contents( $tooltipResourcePriceImg) !!}
                    </span>
                @endif
            </td>
            <td>
                <input type="checkbox" class="disable-row">
            </td>
        </tr>
    @endforeach
    <?php
    $totalAdminPriceText = 'Цена по умолчанию:<br><b>' . number_format( $totalAdminPrice, 0, ' ', ' ' ) . '</b>';
    $isPriceDifferent = $totalAdminPrice !== $total;
    $totalText = number_format( $total, 0, ' ', ' ' );
    if ( $isCountMoreThenOne ) {
        $total           = ceil( $total / $single->craft_count );
        $totalAdminPrice = ceil( $totalAdminPrice / $single->craft_count );
        $totalText       .= ' | ' . number_format( $total, 0, ' ', ' ' );
    }
    ?>
    <tr class="tr-total">
        <td colspan="1">
            Количество крафтов:
        </td>
        <td colspan="2" data-craft-count="1">
            <input style="max-width: 120px" class="form-control" type="number" step="1" min="1" max="100" value="1">
        </td>
        <td colspan="1">
            <b>Итого:</b>
        </td>
        <td colspan="2">
            <b class="total">{{$totalText}}</b>
            @if($isCountMoreThenOne)
                (1 шт.)
            @endif
            @if($isPriceDifferent)
                <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$totalAdminPriceText}}">
                    {!! file_get_contents($tooltipResourcePriceImg) !!}
                </span>
            @endif
        </td>
    </tr>
    </tbody>
</table>
