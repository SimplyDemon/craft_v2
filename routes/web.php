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
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\UpdatePrice;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserPriceController;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes( [
    'register' => true, // Registration Routes...
    'reset'    => false, // Password Reset Routes...
    'verify'   => false, // Email Verification Routes...
] );


Route::get( '/', [ IndexController::class, 'index' ] )->name( 'index' );
Route::get( '/search', [ SearchController::class, 'index' ] )->name( 'search' );
Route::post( '/search', [ SearchController::class, 'ajax' ] )->name( 'search.ajax' );

Route::resource( 'recipes', RecipeController::class )->parameters( [
    'recipes' => 'id',
] )->only( [ 'index', 'show' ] );

Route::middleware( 'auth' )->group( function () {
    Route::resource( 'conversations', ConversationController::class )->parameters( [
        'conversations' => 'id',
    ] )->only( [ 'index', 'create', 'store', 'show' ] );

    Route::resource( 'messages', MessageController::class )->parameters( [
        'messages' => 'id',
    ] )->only( [ 'store' ] );

    Route::prefix( 'user' )->group( function () {
        Route::get( '/', [ UserController::class, 'index' ] )->name( 'user' );
        Route::post( '/', [ UserController::class, 'update' ] )->name( 'user.update' );

        Route::prefix( 'price' )->group( function () {
            Route::get( '/', [ UserPriceController::class, 'index' ] )->name( 'user.price' );
            Route::post( '/', [ UserPriceController::class, 'update' ] )->name( 'user.price.update' );
        } );
    } );

    Route::middleware( 'IsCanUpdatePrice' )->prefix( 'admin_prices' )->group( function () {
        Route::get( '/', [
            UpdatePrice::class,
            'index',
        ] )->name( 'admin_prices' );

        Route::post( '/', [
            UpdatePrice::class,
            'update',
        ] )->name( 'admin_prices.update' );
    } );

    Route::middleware( 'isAdmin' )->prefix( 'admin' )->group( function () {
        Route::resource( 'categories', CategoryController::class )->parameters( [
            'categories' => 'id',
        ] );

        Route::resource( 'recipes', RecipeController::class )->parameters( [
            'recipes' => 'id',
        ] )->except( [ 'index', 'show' ] );

        Route::resource( 'resources', ResourceController::class )->parameters( [
            'resources' => 'id',
        ] );
    } );

} );
