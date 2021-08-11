<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle( Request $request, Closure $next ) {
        $user = Auth::user();

        if ( ! $user || $user->is_admin != 1 ) {
            return redirect( 'home' );

        }

        return $next( $request );
    }
}
