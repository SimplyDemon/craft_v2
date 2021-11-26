<?php
$total = 0;
$totalAdminPrice = 0;
$tooltipResourcePriceImg = public_path() . '/question.svg';
?>
<table class="table recipe mobile-font-size">
    <thead>
    <tr>
        <th scope="col">Ресурс</th>
        <th scope="col">Кол</th>
        <th scope="col" class="mobile-max-width">В наличии</th>
        <th scope="col" class="mobile-max-width">Цена за штуку</th>
        <th scope="col" class="mobile-min-width">Цена за все</th>
        <th scope="col" class="mobile-hide">Исклю-<br>чить</th>
    </tr>
    </thead>
    <tbody>
    @foreach($single->resources as $resource)
        <?php
        $resourceQuantity = $resource->pivot->resource_quantity;
        $adminResourcePrice = $resource->$price;
        $resourcePrice = isset( $user ) && $user->resources->find( $resource->id ) && $user->resources->find( $resource->id )->pivot->$price ? $user->resources->find( $resource->id )->pivot->$price : $adminResourcePrice;
        $resourceLinePrice = $resourcePrice * $resourceQuantity;
        $total += $resourceLinePrice;

        $resourceAdminLinePrice = $adminResourcePrice * $resourceQuantity;
        $totalAdminPrice += $resourceAdminLinePrice;
        $isPriceDifferent = $adminResourcePrice !== $resourcePrice;
        $tooltipResourcePriceText = 'Цена по умолчанию:<br><b>' . prettifyNumber( $adminResourcePrice ) . '</b>';
        $tooltipLinePriceText = 'Цена по умолчанию:<br><b>' . prettifyNumber( $resourceAdminLinePrice ) . '</b>';
        ?>
        <tr>
            <td>
                @if($resource->recipe)
                    <a target="_blank" href="{{route('recipes.show', [ 'id' => $resource->recipe->id ]  )}}">
                        @endif
                        <img width="30" src="{{asset('storage') . '/' . $resource->img}}" alt="resource">{{$resource->name}}
                        @if($resource->recipe)
                    </a>
                @endif
            </td>
            <td data-quantity="{{$resourceQuantity}}" data-quantity-base="{{$resourceQuantity}}">
                {{$resourceQuantity}}
            </td>
            <td class="td-has" data-has="0">
                <input class="form-control mobile-no-padding" type="number" step="1" min="0" max="{{$resourceQuantity}}" value="0">
            </td>
            <td class="td-price" data-price="{{$resourcePrice}}">
                <input class="form-control mobile-no-padding" type="number" step="1" min="0" value="{{$resourcePrice ?? 0}}">
                @if($isPriceDifferent)
                    <span class="mobile-hide" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipResourcePriceText}}">
                                        {!! file_get_contents( $tooltipResourcePriceImg) !!}
                                    </span>
                @endif
            </td>
            <td data-total="{{$resourceLinePrice}}">
                {{prettifyNumber($resourceLinePrice)}}
                @if($isPriceDifferent)
                    <span class="mobile-hide" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipLinePriceText}}">
                        {!! file_get_contents( $tooltipResourcePriceImg) !!}
                    </span>
                @endif
            </td>
            <td class="mobile-hide">
                <input type="checkbox" class="disable-row">
            </td>
        </tr>
    @endforeach
    <?php
    $totalAdminPriceText = 'Цена по умолчанию:<br><b>' . prettifyNumber( $totalAdminPrice ) . '</b>';
    $isPriceDifferent = $totalAdminPrice !== $total;
    $totalText = prettifyNumber( $total );
    if ( $isCountMoreThenOne ) {
        $total           = ceil( $total / $single->craft_count );
        $totalAdminPrice = ceil( $totalAdminPrice / $single->craft_count );
        $totalText       .= ' | ' . prettifyNumber( $total );
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
        <td colspan="1">
            <b class="total">{{$totalText}}</b>
            @if($isCountMoreThenOne)
                (1 шт.)
            @endif
            @if($isPriceDifferent)
                <span class="mobile-hide" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$totalAdminPriceText}}">
                    {!! file_get_contents($tooltipResourcePriceImg) !!}
                </span>
            @endif
        </td>
        <td class="mobile-hide">

        </td>
    </tr>
    </tbody>
</table>
