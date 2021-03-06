<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IsAdmin {
    /**
     * Check user is admin
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle( Request $request, Closure $next ) {
        $user = Auth::user();

        if ( ! $user || $user->is_admin != 1 ) {

            return Redirect::to( route( 'index' ) );
        }

        return $next( $request );
    }
}
