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
use App\Http\Controllers\BeltController;
use App\Http\Controllers\BossesRespawnController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\EnchantmentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JewelryEpicController;
use App\Http\Controllers\JewelryTWController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PriceParserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UpdatePrice;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserPriceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


Route::middleware( 'auth.dev' )->group( function () {
    Auth::routes( [
        'register' => true, // Registration Routes...
        'reset'    => false, // Password Reset Routes...
        'verify'   => false, // Email Verification Routes...
    ]);

    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/bosses-respawn', [BossesRespawnController::class, 'index'])->name('bosses_respawn');
    Route::get('/public', function () {
        return Redirect::to(route('index'));
    })->name('public');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::post('/search', [SearchController::class, 'ajax'])->name('search.ajax');

    Route::get('/jewelry-tw', [JewelryTWController::class, 'index'])->name('jewelry.tw');
    Route::get('/jewelry-epic', [JewelryEpicController::class, 'index'])->name('jewelry.epic');
    Route::get('/belt', [BeltController::class, 'index'])->name('belt');

    Route::get('/non-craftable', [RecipeController::class, 'nonCraftableItems'])->name('non_craftable');
    Route::get('/resources_list', [ResourceController::class, 'index'])->name('resources.index');

    Route::get('/enchantment', [EnchantmentController::class, 'index'])->name('enchantment');

    Route::resource('recipes', RecipeController::class)->only(['index', 'show']);
    Route::resource('resources', ResourceController::class)->only(['show']);
    Route::resource('posts', PostController::class)->only(['index', 'show']);


    Route::middleware('auth')->group(function () {
        Route::resource('conversations', ConversationController::class)->parameters([
            'conversations' => 'id',
        ])->only(['index', 'create', 'store', 'show']);

        Route::resource('messages', MessageController::class)->parameters([
            'messages' => 'id',
        ])->only(['store']);

        Route::prefix( 'user' )->group( function () {
            Route::get( '/', [ UserController::class, 'index' ] )->name( 'user' );
            Route::post( '/', [ UserController::class, 'update' ] )->name( 'user.update' );

            Route::prefix( 'price' )->group( function () {
                Route::get( '/', [ UserPriceController::class, 'index' ] )->name( 'user.price' );
                Route::post( '/', [ UserPriceController::class, 'update' ] )->name( 'user.price.update' );
            } );
        } );

        Route::middleware( 'IsCanUpdatePrice' )->prefix( 'admin_prices' )->group( function () {
            Route::get('/', [
                UpdatePrice::class,
                'index',
            ])->name('admin_prices');

            Route::post('/', [
                UpdatePrice::class,
                'update',
            ])->name('admin_prices.update');

            Route::get('/parser/', [
                PriceParserController::class,
                'index',
            ])->name('parser');
        } );

        Route::middleware( 'isAdmin' )->prefix( 'admin' )->group( function () {
            Route::get('/test', [TestController::class, 'index'])->name('test');

            Route::resource('categories', CategoryController::class)->parameters([
                'categories' => 'id',
            ]);

            Route::resource('recipes', RecipeController::class)->except(['index', 'show']);

            Route::resource('posts', PostController::class)->except(['index', 'show', 'destroy']);

            Route::resource('resources', ResourceController::class)->except(['index', 'show']);
        } );

    } );
} );
