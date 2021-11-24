<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserPriceController extends Controller {
    protected string $folderPath = 'pages.user.price.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    public function index() {
        $user      = auth()->user();
        $resources = Resource::orderBy( 'name', 'asc' )->get()->groupBy( 'type' );
        $recipes   = Recipe::orderBy( 'name', 'asc' )->whereNull( 'resource_id' )->get()->groupBy( 'category_id' );

        $userResources = $user->resources->groupBy( 'type' );
        $userRecipes   = $user->recipes->groupBy( 'category_id' );

        return view( $this->folderPath . 'index', [
            'resources' => $userResources->isEmpty() ? $resources : $userResources,
            'recipes'   => $userRecipes->isEmpty() ? $recipes : $userRecipes,
            'title'     => 'Цены',
        ] );
    }

    public function update( Request $request ) {

        $all  = $request->all();
        $user = auth()->user();

        if ( empty( $all ) || ! is_array( $all ) || empty( $all['resources'] || ! is_array( $all['resources'] ) || empty( $all['recipes'] ) || ! is_array( $all['recipes'] ) ) ) {
            $message = 'Входящие данные не валидны.';
        } else {

            $resources = $all['resources'];
            $recipes   = $all['recipes'];
            DB::table( 'resource_user' )->where( [
                [ 'user_id', '=', $user->id ],
            ] )->delete();
            DB::table( 'recipe_user' )->where( [
                [ 'user_id', '=', $user->id ],
            ] )->delete();
            foreach ( $resources as $id => $prices ) {
                /*
                 * Exclude other requests
                 */
                if ( ! is_numeric( $id ) ) {
                    continue;
                }

                $user->resources()->attach( $id, [
                    'price_sell' => (int) $prices['price_sell'],
                ] );
            }

            foreach ( $recipes as $id => $prices ) {
                /*
                 * Exclude other requests
                 */
                if ( ! is_numeric( $id ) ) {
                    continue;
                }

                $user->recipes()->attach( $id, [
                    'price_sell' => (int) $prices['price_sell'],
                ] );
            }
            $message = 'Цены обновлены';
        }


        $request->session()->flash( 'message', $message );

        return Redirect::to( route( 'user.price' ) );
    }
}
