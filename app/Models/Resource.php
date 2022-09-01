<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model {
    use SoftDeletes;

    protected $guarded = [ 'id', 'created_at', 'updated_at', 'deleted_at' ];

    public function recipes() {
        return $this->belongsToMany( Recipe::class );
    }

    public function recipe() {
        return $this->hasOne( Recipe::class );
    }

    public function users() {
        return $this->belongsToMany( User::class );
    }

    public function getPriceAttribute() {
        $user = auth()->user();

        return $user && $user->resources->find( $this->id ) && $user->resources->find( $this->id )->pivot->price_sell ? $user->resources->find( $this->id )->pivot->price_sell : $this->price_sell;
    }

    public function getResourcesDataAttribute() {
        $priceType          = 'price_sell';
        $resourceQuantity   = $this->pivot->resource_quantity;
        $adminResourcePrice = $this->$priceType;
        $resourcePrice      = $this->price;
        $linePrice          = $resourcePrice * $resourceQuantity;

        $adminLinePrice       = $adminResourcePrice * $resourceQuantity;
        $isPriceDifferent     = $adminResourcePrice !== $resourcePrice;
        $tooltipPriceText     = 'Цена по умолчанию:<br><b>' . prettifyNumber( $adminResourcePrice ) . '</b>';
        $tooltipLinePriceText = 'Цена по умолчанию:<br><b>' . prettifyNumber( $adminLinePrice ) . '</b>';

        if ( $this->recipe ) {
            $resourceUrl = route( 'recipes.show', [ 'id' => $this->recipe ] );
        } else {
            $resourceUrl = route( 'resources.show', [ 'id' => $this ] );
        }

        if ( $this->recipe && $this->recipe->resources ) {
            $subResources     = $this->recipe->resources;
            $subResourcesData = [];
            foreach ( $subResources as $subResource ) {
                $subResourcesData[] = $subResource->resources_data;
            }
        }

        return [
            'url'                  => $resourceUrl,
            'id'                   => $this->id,
            'imgUrl'               => asset( 'storage' ) . '/' . $this->img,
            'name'                 => $this->name,
            'quantity'             => $resourceQuantity,
            'price' => $resourcePrice,
            'linePrice' => $linePrice,
            'adminLinePrice' => $adminLinePrice,
            'isPriceDifferent' => $isPriceDifferent,
            'tooltipPriceText' => $tooltipPriceText,
            'tooltipLinePriceText' => $tooltipLinePriceText,
            'subResources' => $subResources ?? null,
            'subResourcesData' => $subResourcesData ?? null,
        ];
    }

    public function getDescriptionSeoTextAttribute()
    {
        return "Информация о ресурсе {$this->name}. В каких рецептах он используется, график изменения цен в течении времени.";
    }
}
