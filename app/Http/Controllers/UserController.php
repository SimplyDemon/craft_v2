<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller {
    protected $folderPath = 'pages.user.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    public function index() {
        $user = auth()->user();

        return view( $this->folderPath . 'index', [
            'user' => $user,
        ] );
    }

    public function update( Request $request ) {

    }
}
