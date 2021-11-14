@extends('layouts.app')
@section('content')
    <?php
    $recipePriceSell = isset( $user ) && $user->recipes->find( $single->id ) && $user->recipes->find( $single->id )->pivot->price_sell ? $user->recipes->find( $single->id )->pivot->price_sell : $single->price_sell;
    $masterWorkText = 'Crafter level <b>85</b><br>';
    $masterWorkText .= 'Chance: <b>' . $single->rare_chance . '</b>%';

    if ( $single->masterwork_name ) {
        $masterWorkText .= '<br><i>' . $single->masterwork_name . '</i>';
    }
    if ( $single->masterwork_description ) {
        $masterWorkText .= '<br>' . $single->masterwork_description;
    }
    ?>
    <div class="nk-main">

        <!-- START: Header Title -->
        <div class="nk-box">
            <div class="container">
                <div class="nk-gap-5"></div>
                <h1 class="nk-title">{{ $title ?? $single->name }}</h1>
                <div class="nk-gap-4"></div>
            </div>
        </div>
        <!-- END: Header Title -->

        <div class="container">

            <h3>
                <img width="50px" src="{{asset('storage') . '/' . $single->img}}">
                @if($single->gradeImage)
                    <img class="grade" src="{{$single->gradeImage}}" alt="grade">
                @endif
                @if($single->rare_chance)
                    <span class="nk-btn nk-btn-style-1 nk-btn-md nk-btn-color-main-1" style="font-size: 10px;" data-toggle="tooltip" data-html="true" data-placement="top" title="{{$masterWorkText}}">Masterwork</span>
                @endif

                @if($recipePriceSell > 0)
                    Цена: {{number_format($recipePriceSell, 0, ' ', ' ')}}
                @endif
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
                            $resourcePrice = isset( $user ) && $user->resources->find( $resource->id ) && $user->resources->find( $resource->id )->pivot->price_sell ? $user->resources->find( $resource->id )->pivot->price_sell : $adminResourcePriceSell;
                            $resourceLinePrice = $resourcePrice * $resourceQuantity;
                            $total += $resourceLinePrice;

                            $resourceAdminLinePrice = $adminResourcePriceSell * $resourceQuantity;
                            $totalAdminPrice += $resourceAdminLinePrice;
                            $isPriceDifferent = $adminResourcePriceSell !== $resourcePrice;
                            $tooltipResourcePriceImg = $tooltipImagePathRegular;
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
                                {{number_format($resourcePrice, 0, ' ', ' ')}}
                                @if($isPriceDifferent)
                                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipResourcePriceText}}">
                            {!! file_get_contents( $tooltipResourcePriceImg) !!}
                        </span>
                                @endif
                            </td>
                            <td>
                                {{number_format($resourceLinePrice, 0, ' ', ' ') }}
                                @if($isPriceDifferent)
                                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipLinePriceText}}">
                            {!! file_get_contents( $tooltipResourcePriceImg) !!}
                        </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    <?php
                    $totalAdminPriceText = 'Цена по умолчанию:<br><b>' . number_format( $totalAdminPrice, 0, ' ', ' ' ) . '</b>';
                    $isPriceDifferent = $totalAdminPrice !== $total;
                    $tooltipAdminTotalPriceImg = $tooltipImagePathRegular;
                    if ( $single->craft_count !== 1 ) {
                        $total           = ceil( $total / $single->craft_count );
                        $totalAdminPrice = ceil( $totalAdminPrice / $single->craft_count );
                    }
                    ?>
                    <tr>
                        <td colspan="3">
                            <b>Итого:</b>
                        </td>
                        <td>
                            <b>{{number_format($total, 0, ' ', ' ')}}</b>
                            @if($isPriceDifferent)
                                <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$totalAdminPriceText}}">
                                    {!! file_get_contents($tooltipAdminTotalPriceImg) !!}
                                </span>
                            @endif
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
                            $resourcePrice = isset( $user ) && $user->resources->find( $resource->id ) && $user->resources->find( $resource->id )->pivot->price_buy ? $user->resources->find( $resource->id )->pivot->price_buy : $adminResourcePriceBuy;
                            $resourceLinePrice = $resourcePrice * $resourceQuantity;
                            $total += $resourceLinePrice;

                            $resourceAdminLinePrice = $adminResourcePriceBuy * $resourceQuantity;
                            $totalAdminPrice += $resourceAdminLinePrice;
                            $isPriceDifferent = $adminResourcePriceBuy !== $resourcePrice;
                            $tooltipResourcePriceImg = $tooltipImagePathRegular;
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
                                {{number_format($resourcePrice, 0, ' ', ' ')}}
                                @if($isPriceDifferent)
                                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipResourcePriceText}}">
                                        {!! file_get_contents( $tooltipResourcePriceImg) !!}
                                    </span>
                                @endif
                            </td>
                            <td>
                                {{number_format($resourceLinePrice, 0, ' ', ' ') }}
                                @if($isPriceDifferent)
                                    <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$tooltipLinePriceText}}">
                                     {!! file_get_contents( $tooltipResourcePriceImg) !!}
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    <?php
                    $totalAdminPriceText = 'Цена по умолчанию:<br><b>' . number_format( $totalAdminPrice, 0, ' ', ' ' ) . '</b>';
                    $isPriceDifferent = $totalAdminPrice !== $total;
                    $tooltipAdminTotalPriceImg = $tooltipImagePathRegular;
                    if ( $single->craft_count !== 1 ) {
                        $total           = ceil( $total / $single->craft_count );
                        $totalAdminPrice = ceil( $totalAdminPrice / $single->craft_count );
                    }
                    ?>
                    <tr>
                        <td colspan="3">
                            <b>Итого:</b>
                        </td>
                        <td>
                            <b>{{number_format($total, 0, ' ', ' ')}}</b>
                            @if($isPriceDifferent)
                                <span data-toggle="tooltip" data-html="true" data-placement="top" title="{{$totalAdminPriceText}}">
                                    {!! file_get_contents($tooltipAdminTotalPriceImg) !!}
                                </span>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            @endif
            <div class="nk-gap-4"></div>
            <div class="nk-gap-3"></div>
        </div>

    </div>


@endsection

@push('extra-scripts')
    <script type="text/javascript">
        $( function() {

            $( '[data-toggle="tooltip"]' ).tooltip()
        } )
    </script>
@endpush
