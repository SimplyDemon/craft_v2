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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes( [
    'register' => false, // Registration Routes...
    'reset'    => false, // Password Reset Routes...
    'verify'   => false, // Email Verification Routes...
] );

Route::middleware( 'auth' )->get( '/', [ IndexController::class, 'index' ] )->name( 'index' );

Route::middleware( 'IsCanUpdatePrice' )->get( '/admin_prices', [
    UpdatePrice::class,
    'index',
] )->name( 'admin_prices' );
Route::middleware( 'IsCanUpdatePrice' )->post( '/admin_prices', [
    UpdatePrice::class,
    'update',
] )->name( 'admin_prices_update' );

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
