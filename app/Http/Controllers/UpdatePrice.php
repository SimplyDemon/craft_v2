<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UpdatePrice extends Controller {
    protected string $folderPath = 'pages.admin-price.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    public function index() {
        $resources = Resource::orderBy( 'name', 'asc' )->get()->groupBy( 'type' );
        $recipes   = Recipe::orderBy( 'name', 'asc' )->get()->groupBy( 'category_id' );

        return view( $this->folderPath . 'index', [
            'resources' => $resources,
            'recipes'   => $recipes,
            'title'     => 'Админ цены',
        ] );
    }

    public function update( Request $request ) {
        $all = $request->all();

        if ( empty( $all ) || ! is_array( $all ) || empty( $all['resources'] || ! is_array( $all['resources'] ) || empty( $all['recipes'] ) || ! is_array( $all['recipes'] ) ) ) {
            $message = 'Входящие данные не валидны.';
        } else {
            $resources = $all['resources'];
            $recipes   = $all['recipes'];
            foreach ( $resources as $id => $prices ) {
                /*
                 * Exclude other requests
                 */
                if ( ! is_numeric( $id ) ) {
                    continue;
                }

                Resource::findOrFail( $id )->update( [
                    'price_sell' => (int) $prices['price_sell'],
                    'price_buy'  => (int) $prices['price_buy'],
                ] );
            }

            foreach ( $recipes as $id => $prices ) {
                /*
                 * Exclude other requests
                 */
                if ( ! is_numeric( $id ) ) {
                    continue;
                }

                Recipe::findOrFail( $id )->update( [
                    'price_sell' => (int) $prices['price_sell'],
                    'price_buy'  => (int) $prices['price_buy'],
                ] );
            }
            $message = 'Цены обновлены.';
        }


        $request->session()->flash( 'message', $message );

        return Redirect::to( route( 'admin_prices' ) );
    }
}
