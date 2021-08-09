<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\ResourceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get( '/', function () {
    return view( 'welcome' );
} );

Auth::routes();

Route::get( '/home', [ HomeController::class, 'index' ] )->name( 'home' );

Route::middleware( 'isAdmin' )->prefix( 'admin' )->group( function () {
    Route::resources( [
        'categories' => CategoryController::class,
        'recipes'    => RecipeController::class,
        'resources'  => ResourceController::class,
    ] );
} );
