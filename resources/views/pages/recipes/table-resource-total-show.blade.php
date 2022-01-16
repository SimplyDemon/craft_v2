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
        @if($isTotalPriceDifferent)
            <span class="mobile-hide" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$totalAdminPriceText}}">
                {!! file_get_contents($tooltipResourcePriceImg) !!}
            </span>
        @endif
    </td>
    <td class="mobile-hide">

    </td>
</tr>
