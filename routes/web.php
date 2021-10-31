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
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UpdatePrice;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserPriceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes( [
    'register' => false, // Registration Routes...
    'reset'    => false, // Password Reset Routes...
    'verify'   => false, // Email Verification Routes...
] );

Route::middleware( 'auth' )->group( function () {
    Route::get( '/', [ IndexController::class, 'index' ] )->name( 'index' );

    Route::prefix( 'user' )->group( function () {
        Route::get( '/', [ UserController::class, 'index' ] )->name( 'user' );

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
        ] );
        Route::resource( 'resources', ResourceController::class )->parameters( [
            'resources' => 'id',
        ] );
    } );

} );
