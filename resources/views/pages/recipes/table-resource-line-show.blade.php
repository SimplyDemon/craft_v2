<?php
$depth = $depth ?? 0;
$class = '';
if (isset($parentResourceId)) {
    $class .= 'disabled-with-js d-none child child-depth-'.$depth;
}
if ($resource['subResourcesData']) {
    $class .= ' has-child';
}
$linePrice = $resource['linePrice'];
$quantity = $resource['quantity'];
$quantity = isset($parentResourceQuantity) && $parentResourceQuantity > 0 ? $quantity * $parentResourceQuantity : $quantity;
$linePrice = isset($parentResourceQuantity) && $parentResourceQuantity > 0 ? $linePrice * $parentResourceQuantity : $linePrice;
$uniqueTrString = md5(uniqid(rand(), true));
?>
<tr class="resource_table_line {{$class}}" data-tr-unique="{{$uniqueTrString}}" data-id="{{$resource['id']}}" data-parent-tr-unique="{{$parentUniqueTrString ?? ''}}" data-parent-id="{{$parentResourceId ?? '' }}">
    <td>
        <a class="resource-link" href="{{$resource['url']}}">
            <img width="30" src="{{$resource['imgUrl']}}" alt="{{$resource['name']}}">
            {{$resource['name']}}
        </a>

        @if ($resource['subResourcesData'])
            <svg class="resource_table_line-svg resource_table_line-expand-resource" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="15" height="15">
                <path stroke="white" fill="white"
                      d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 13 L 24 24 L 13 24 L 13 26 L 24 26 L 24 37 L 26 37 L 26 26 L 37 26 L 37 24 L 26 24 L 26 13 L 24 13 z" />
            </svg>

            <svg class="resource_table_line-svg resource_table_line-de-expand-resource d-none" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="15" height="15">
                <path stroke="white" fill="white"
                      d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 24 L 13 24 L 13 26 L 24 26 L 26 26 L 37 26 L 37 24  z" />
            </svg>

        @endif


    </td>
    <td data-quantity="{{$quantity}}" data-quantity-base="{{$quantity}}">
        {{$quantity}}
    </td>
    <td class="td-has" data-has="0">
        <input class="form-control mobile-no-padding" type="number" step="1" min="0" max="{{$quantity}}" value="0">
    </td>
    <td class="td-price" data-price="{{$resource['price']}}">
        <input class="form-control mobile-no-padding" type="number" step="1" min="0" value="{{$resource['price'] ?? 0 }}">
        @if($resource['isPriceDifferent'])
            <span class="mobile-hide" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$resource['tooltipPriceText']}}">
                {!! file_get_contents( $tooltipPriceImg) !!}
            </span>
        @endif
    </td>
    <td data-total="{{$linePrice}}">
        {{prettifyNumber($linePrice)}}
        @if($resource['isPriceDifferent'])
            <span class="mobile-hide" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$resource['tooltipLinePriceText']}}">
                {!! file_get_contents( $tooltipPriceImg) !!}
            </span>
        @endif
    </td>
    <td class="mobile-hide">
        <input type="checkbox" class="disable-row">
    </td>
</tr>

@if ($resource['subResourcesData'])
    <?php
    $depth ++;
    $parentResourceId = $resource['id'];
    ?>
    @foreach($resource['subResourcesData'] as $resource)
        @include('pages.recipes.table-resource-line-show', [
	        'parentResourceId' => $parentResourceId,
	        'parentUniqueTrString' => $uniqueTrString,
	        'parentResourceQuantity' => $quantity,
	        'depth' => $depth,
	])
    @endforeach
@endif
