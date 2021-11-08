<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function update( Request $request ) {

    }
}
