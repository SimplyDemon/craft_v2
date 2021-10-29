<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IsCanUpdatePrice extends Controller {
    protected $name = 'resources.';
    protected $folderPath = 'pages.admin-price.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {
        $all = Resource::orderBy( 'name', 'asc' )->get()->groupBy( 'type' );

        return view( $this->folderPath . 'index', [ 'all' => $all ] );
    }

    public function update( Request $request ) {
        $all = $request->all();

        if ( empty( $all ) || ! is_array( $all ) ) {
            $message = 'Что-то пошло не так.';
        } else {
            foreach ( $all as $id => $prices ) {
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
            $message = 'Цены обновлены';
        }


        $request->session()->flash( 'message', $message );

        return Redirect::to( route( 'admin_prices' ) );
    }
}
