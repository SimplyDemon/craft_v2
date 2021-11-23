<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class AuthenticateOnceWithBasicAuthOnlyDev {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle( $request, $next ) {
        if ( env( 'APP_ENV' ) === 'dev' ) {
            return Auth::onceBasic() ?: $next( $request );
        }

        return $next( $request );
    }

}
