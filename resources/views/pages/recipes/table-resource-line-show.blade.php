<tr>
    <td>
        <a class="resource-link" href="{{$resource['url']}}">
            <img width="30" src="{{$resource['imgUrl']}}" alt="{{$resource['name']}}">
            {{$resource['name']}}
        </a>
    </td>
    <td data-quantity="{{$resource['quantity']}}" data-quantity-base="{{$resource['quantity']}}">
        {{$resource['quantity']}}
    </td>
    <td class="td-has" data-has="0">
        <input class="form-control mobile-no-padding" type="number" step="1" min="0" max="{{$resource['quantity']}}" value="0">
    </td>
    <td class="td-price" data-price="{{$resource['price']}}">
        <input class="form-control mobile-no-padding" type="number" step="1" min="0" value="{{$resource['price'] ?? 0 }}">
        @if($resource['isPriceDifferent'])
            <span class="mobile-hide" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$resource['tooltipPriceText']}}">
                {!! file_get_contents( $resource['tooltipResourcePriceImg']) !!}
            </span>
        @endif
    </td>
    <td data-total="{{$resource['linePrice']}}">
        {{prettifyNumber($resource['linePrice'])}}
        @if($resource['isPriceDifferent'])
            <span class="mobile-hide" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$resource['tooltipLinePriceText']}}">
                {!! file_get_contents( $resource['tooltipResourcePriceImg']) !!}
            </span>
        @endif
    </td>
    <td class="mobile-hide">
        <input type="checkbox" class="disable-row">
    </td>
</tr>
