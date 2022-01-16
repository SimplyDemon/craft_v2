<?php

namespace App\Services;

use App\Models\Recipe;

class PrepareRecipeResourcesService {
    protected int $total = 0;
    protected int $totalAdminPrice = 0;
    protected string $tooltipPriceImg;
    protected bool $isCountMoreThenOne;

    public function __construct( $isCountMoreThenOne ) {
        $this->tooltipPriceImg    = public_path() . '/question.svg';
        $this->isCountMoreThenOne = $isCountMoreThenOne;
    }

    public function prepare( Recipe $recipe ) {
        $resources     = $recipe->resources;
        $resourcesData = [];
        foreach ( $resources as $resource ) {
            $priceType          = 'price_sell';
            $resourceQuantity   = $resource->pivot->resource_quantity;
            $adminResourcePrice = $resource->$priceType;
            $resourcePrice      = $resource->price;
            $linePrice          = $resourcePrice * $resourceQuantity;
            $this->total        += $linePrice;

            $resourceAdminLinePrice = $adminResourcePrice * $resourceQuantity;
            $this->totalAdminPrice  += $resourceAdminLinePrice;
            $isPriceDifferent       = $adminResourcePrice !== $resourcePrice;
            $tooltipPriceText       = 'Цена по умолчанию:<br><b>' . prettifyNumber( $adminResourcePrice ) . '</b>';
            $tooltipLinePriceText   = 'Цена по умолчанию:<br><b>' . prettifyNumber( $resourceAdminLinePrice ) . '</b>';

            if ( $resource->recipe ) {
                $resourceUrl = route( 'recipes.show', [ 'id' => $resource->recipe ] );
            } else {
                $resourceUrl = route( 'resources.show', [ 'id' => $resource ] );
            }

            $resourcesData[] = [
                'url'                     => $resourceUrl,
                'imgUrl'                  => asset( 'storage' ) . '/' . $resource->img,
                'name'                    => $resource->name,
                'quantity'                => $resourceQuantity,
                'price'                   => $resourcePrice,
                'linePrice'               => $linePrice,
                'isPriceDifferent'        => $isPriceDifferent,
                'tooltipPriceText'        => $tooltipPriceText,
                'tooltipResourcePriceImg' => $this->tooltipPriceImg,
                'tooltipLinePriceText'    => $tooltipLinePriceText,
            ];


        }

        $totalAdminPriceText   = 'Цена по умолчанию:<br><b>' . prettifyNumber( $this->totalAdminPrice ) . '</b>';
        $isTotalPriceDifferent = $this->totalAdminPrice !== $this->total;
        $totalText             = prettifyNumber( $this->total );
        if ( $this->isCountMoreThenOne ) {
            $this->total           = ceil( $this->total / $recipe->craft_count );
            $this->totalAdminPrice = ceil( $this->totalAdminPrice / $recipe->craft_count );
            $totalText             .= ' | ' . prettifyNumber( $this->total );
        }

        return [
            'total'                 => $this->total,
            'totalText'             => $totalText,
            'totalAdminPrice'       => $this->totalAdminPrice,
            'totalAdminPriceText'   => $totalAdminPriceText,
            'isCountMoreThenOne'    => $this->isCountMoreThenOne,
            'isTotalPriceDifferent' => $isTotalPriceDifferent,
            'resourcesData'         => $resourcesData,
        ];

    }
}
