<?php
$total = 0;
$totalAdminPrice = 0;
$tooltipResourcePriceImg = public_path() . '/question.svg';
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Ресурс</th>
        <th scope="col">Количество</th>
        <th scope="col">Цена за штуку</th>
        <th scope="col">Цена за все</th>
        <th scope="col">Игнорировать<br>строку</th>
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
            <td data-quantity="{{$resourceQuantity}}">
                {{$resourceQuantity}}
            </td>
            <td data-price="{{$resourcePrice}}">
                {{number_format($resourcePrice, 0, ' ', ' ')}}
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
        $totalText       = number_format( $total, 0, ' ', ' ' ) . ' (1 шт.)';
    }
    ?>
    <tr>
        <td colspan="3">
            <b>Итого:</b>
        </td>
        <td>
            <b class="total">{{$totalText}}</b>
            @if($isPriceDifferent)
                <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$totalAdminPriceText}}">
                    {!! file_get_contents($tooltipResourcePriceImg) !!}
                </span>
            @endif
        </td>
        <td>

        </td>
    </tr>
    </tbody>
</table>
<?php unset( $total ) ?>
