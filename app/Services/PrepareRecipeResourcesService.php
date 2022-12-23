<?php

namespace App\Services;

use App\Models\Recipe;

class PrepareRecipeResourcesService {
    protected int $total = 0;
    protected int $totalAdminPrice = 0;
    protected string $tooltipPriceImg;

    public function __construct() {
        $this->tooltipPriceImg = public_path() . '/question.svg';
    }

    public function prepare( Recipe $recipe ) {
        $isCountMoreThenOne = $recipe->craft_count !== 1;
        $resources          = $recipe->resources;
        $resourcesData      = [];
        foreach ( $resources as $resource ) {
            $resourceData          = $resource->resources_data;
            $this->total           += $resourceData['linePrice'];
            $this->totalAdminPrice += $resourceData['adminLinePrice'];
            $resourcesData[]       = $resourceData;
        }

        $totalAdminPriceText   = 'Цена по умолчанию:<br><b>' . prettifyNumber( $this->totalAdminPrice ) . '</b>';
        $isTotalPriceDifferent = $this->totalAdminPrice !== $this->total;
        $totalText             = prettifyNumber( $this->total );
        if ( $isCountMoreThenOne ) {
            $this->total           = ceil( $this->total / $recipe->craft_count );
            $this->totalAdminPrice = ceil( $this->totalAdminPrice / $recipe->craft_count );
            $totalText             .= ' | ' . prettifyNumber( $this->total );
        }

        return [
            'recipe' => $recipe,
            'total' => $this->total,
            'totalText' => $totalText,
            'totalAdminPrice' => $this->totalAdminPrice,
            'totalAdminPriceText' => $totalAdminPriceText,
            'isCountMoreThenOne' => $isCountMoreThenOne,
            'isTotalPriceDifferent' => $isTotalPriceDifferent,
            'resourcesData' => $resourcesData,
            'craftCount' => $recipe->craft_count,
        ];

    }
}
