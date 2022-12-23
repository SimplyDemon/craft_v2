<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddRecipe;
use App\Http\Requests\EditRecipe;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Resource;
use App\Services\PrepareRecipeResourcesService;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RecipeController extends Controller {
    protected string $name = 'recipes.';
    protected string $folderPath = 'admin.pages.recipes.';
    protected string $folderPathUser = 'pages.recipes.';
    public const QUERY_EXCEPTION_READABLE_MESSAGE = 2;


    public function index() {
        $recipes = Recipe::where('is_non_craftable', false)->orderBy('grade', 'desc')->orderBy('id', 'desc')->get();

        $categories = [
            'weapon'   => [
                'title' => 'Оружие',
                'list'  => [
                    'sword'   => 'Мечи',
                    'blunt'   => 'Ударное',
                    'dagger'  => 'Кинжалы',
                    'bow'     => 'Луки',
                    'polearm' => 'Копья',
                    'fist'    => 'Кастеты',
                ],
            ],
            'armor'    => [
                'title' => 'Броня',
                'list'  => [
                    'upper'     => 'Верх',
                    'lower'     => 'Низ',
                    'full body' => 'Цельное',
                    'helmet'    => 'Шлемы',
                    'gloves'    => 'Перчатки',
                    'boot'      => 'Ботинки',
                    'shield'    => 'Щиты',
                    'sigil'     => 'Сигили',
                ],
            ],
            'jewelry'  => [
                'title' => 'Бижутерия',
                'list'  => [
                    'necklace' => 'Ожерелья',
                    'earring'  => 'Серьги',
                    'ring'     => 'Кольца',
                ],
            ],
            'other'    => [
                'title' => 'Шоты',
            ],
            'resource' => [
                'title' => 'Ресурсы',
            ],
        ];

        return view( $this->folderPathUser . 'index', [
            'categories' => $categories,
            'recipes'    => $recipes,
            'title'      => 'Все предметы',
        ] );
    }

    public function create() {
        $percentTypes = DB::select( DB::raw( 'SHOW COLUMNS FROM recipes WHERE Field = "percent"' ) )[0]->Type;
        $gradeTypes   = DB::select( DB::raw( 'SHOW COLUMNS FROM recipes WHERE Field = "grade"' ) )[0]->Type;

        preg_match( '/^enum\((.*)\)$/', $percentTypes, $matches );
        $percentValues = [];
        foreach ( explode( ',', $matches[1] ) as $value ) {
            $percentValues[] = trim( $value, "'" );
        }

        preg_match( '/^enum\((.*)\)$/', $gradeTypes, $matches );
        $gradeValues = [];
        foreach ( explode( ',', $matches[1] ) as $value ) {
            $gradeValues[] = trim( $value, "'" );
        }


        $categories = Category::orderBy( 'name', 'asc' )->get();
        $resources  = Resource::orderBy( 'name', 'asc' )->get();


        return view( $this->folderPath . 'create', [
            'percentValues' => $percentValues,
            'gradeValues'   => $gradeValues,
            'categories'    => $categories,
            'resources'     => $resources,
        ] );
    }

    public function store( AddRecipe $request ) {
        //if its resource recipe don't need put name, just get name from resource id
        if ( $request->resource_id ) {
            $resourceName = $request->name = Resource::findOrFail( $request->resource_id )->name;
            $request->merge( [ 'name' => $resourceName ] );
        }


        $slug = Str::slug( $request->name, '-' );

        $request->merge( [ 'slug' => $slug ] );


        try {
            $recipe = Recipe::create( $request->except( 'image' ) );

            $url     = route( $this->name . 'show', [ 'single' => $recipe, 'id' => $recipe->id ] );
            $message = "Добавление выполнено успешно! Нажмите <a href='{$url}'>сюда</a> что бы посмотреть";
        }
        catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( route( $this->name . 'create' ) );
    }


    public function show(Recipe $recipe)
    {
        $user = auth()->user();
        $recipe100 = Recipe::where('name', $recipe->name . ' 100%')->first();
        $canonicalUrl = ($recipe->percent === '60' && $recipe100) ? route('recipes.show', $recipe100) : null;

        $recipePrice = $recipe->price;
        $chanceText = 'MasterWork';
        $prepareRecipe = new PrepareRecipeResourcesService();
        $recipeData = $prepareRecipe->prepare($recipe);
        $tooltipPriceImg = public_path() . '/question.svg';
        if ($recipe->grade === 'C') {
            $chanceText = 'DoubleCraft';
        }

        return view($this->folderPathUser . 'show', [
            'single' => $recipe,
            'id' => $recipe->id,
            'user' => $user,
            'title' => $recipe->name,
            'canonicalUrl' => $canonicalUrl,
            'recipePrice' => $recipePrice,
            'chanceText' => $chanceText,
            'total' => $recipeData['total'],
            'totalText' => $recipeData['totalText'],
            'totalAdminPrice' => $recipeData['totalAdminPrice'],
            'totalAdminPriceText' => $recipeData['totalAdminPriceText'],
            'isCountMoreThenOne' => $recipeData['isCountMoreThenOne'],
            'isTotalPriceDifferent' => $recipeData['isTotalPriceDifferent'],
            'resourcesData' => $recipeData['resourcesData'],
            'tooltipPriceImg' => $tooltipPriceImg,
            'craftCount' => $recipe->craft_count,
        ] );
    }


    public function edit(Recipe $recipe)
    {
        $percentTypes = DB::select(DB::raw('SHOW COLUMNS FROM recipes WHERE Field = "percent"'))[0]->Type;
        $gradeTypes = DB::select(DB::raw('SHOW COLUMNS FROM recipes WHERE Field = "grade"'))[0]->Type;

        preg_match('/^enum\((.*)\)$/', $percentTypes, $matches);
        $percentValues = [];
        foreach (explode(',', $matches[1]) as $value) {
            $percentValues[] = trim($value, "'");
        }

        preg_match('/^enum\((.*)\)$/', $gradeTypes, $matches);
        $gradeValues = [];
        foreach ( explode( ',', $matches[1] ) as $value ) {
            $gradeValues[] = trim( $value, "'" );
        }


        $recipeResources = DB::table( 'recipe_resource' )->where([
            ['recipe_id', '=', $recipe->id],
        ] )->get();

        $categories = Category::orderBy( 'name', 'asc' )->get();
        $resources  = Resource::orderBy( 'name', 'asc' )->get();

        return view( $this->folderPath . 'edit', [
            'single' => $recipe,
            'percentValues' => $percentValues,
            'gradeValues' => $gradeValues,
            'categories' => $categories,
            'resources' => $resources,
            'recipeResources' => $recipeResources,
        ] );
    }


    public function update(EditRecipe $request, Recipe $recipe): RedirectResponse
    {
        $method = $request->input('method');
        $resourceIDs = $request->input('resource_ids');
        $resourceQuantities = $request->input('resource_quantity');


        //default delete all recipe values and write again its much better then make 1000 checks
        DB::table('recipe_resource')->where([
            ['recipe_id', '=', $recipe->id],
        ])->delete();

        $i = 0;
        if ( $resourceIDs && is_array( $resourceIDs ) ) {
            foreach ( $resourceIDs as $resourceID ) {
                $recipe->resources()->attach($resourceID, ['resource_quantity' => $resourceQuantities[$i]]);

                $i ++;
            }
        }

        $all = Recipe::orderBy( 'name', 'asc' )->get();

        try {
            $slug = Str::slug($request->name, '-');
            $request->merge(['slug' => $slug]);

            $recipe->update($request->except('currentID', 'method', 'image', 'resource_ids', 'resource_quantity'));;
            $message = 'Обновление выполнено успешно!';
        }
        catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        if ( $method == 'Применить' ) {
            return Redirect::to(
                route($this->name . 'edit', [
                    'id' => $recipe->id,
                    'single' => $recipe,
                    'all' => $all,
                ])
            );
        }

        return Redirect::to( route( $this->name . 'index' ) );


    }


    public function destroy(Recipe $recipe)
    {
        try {
            $recipe->delete();
            $message = 'Удаление выполнено успешно!';
        } catch (QueryException $exception) {
            $message = $exception->errorInfo[self::QUERY_EXCEPTION_READABLE_MESSAGE];
        }

        Session::flash('message', $message);

        return Redirect::to(route($this->name . 'index'));
    }

    public function nonCraftableItems()
    {
        $recipes = Recipe::where('is_non_craftable', true)->orderBy('grade', 'desc')->orderBy('id', 'desc')->get();

        $categories = [
            'weapon' => [
                'title' => 'Оружие',
                'list' => [
                    'sword' => 'Мечи',
                    'blunt' => 'Ударное',
                    'dagger' => 'Кинжалы',
                    'bow' => 'Луки',
                    'polearm' => 'Копья',
                    'fist' => 'Кастеты',
                    'dual sword' => 'Дуал мечи',
                    'dual dagger' => 'Дуал дагеры',
                ],
            ],
            'armor' => [
                'title' => 'Броня',
                'list' => [
                    'upper' => 'Верх',
                    'lower' => 'Низ',
                    'helmet' => 'Шлемы',
                    'gloves' => 'Перчатки',
                    'boot' => 'Ботинки',
                    'shield' => 'Щиты',
                    'sigil' => 'Сигили',
                ],
            ],
            'jewelry' => [
                'title' => 'Бижутерия',
                'list' => [
                    'necklace' => 'Ожерелья',
                    'earring' => 'Серьги',
                    'ring' => 'Кольца',
                ],
            ],
            'other' => [
                'title' => 'Другое',
                'list' => [
                    'belt' => 'Пояса',
                ],
            ],
        ];

        return view($this->folderPathUser . 'index', [
            'categories' => $categories,
            'recipes' => $recipes,
            'title' => 'Не крафтовые предметы',
            'isNonCraftable' => true,
        ]);
    }
}
