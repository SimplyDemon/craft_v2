<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IsCanUpdatePrice {
    /**
     * Check is user can update admin prices
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle( Request $request, Closure $next ) {
        $user = Auth::user();

        if ( ! $user || $user->is_can_update_price != 1 ) {

            return Redirect::to( route( 'index' ) );
        }

        return $next( $request );
    }
}
