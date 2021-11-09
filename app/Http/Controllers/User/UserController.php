<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller {
    protected string $folderPath = 'pages.user.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    public function index() {
        $user = auth()->user();

        return view( $this->folderPath . 'index', [
            'user'  => $user,
            'title' => 'Личный кабинет',
        ] );
    }

    public function update( Request $request ): RedirectResponse {
        $isEnableAnimation = $request->input( 'is_enable_animation' ) ? '1' : '0';
        $request->merge( [ 'is_enable_animation' => $isEnableAnimation ] );
        $all  = $request->except( '_token' );
        $user = auth()->user();
        $user->update( $all );

        return Redirect::to( route( 'user' ) );
    }
}
