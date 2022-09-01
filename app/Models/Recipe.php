<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class Recipe extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function resources()
    {
        return $this->belongsToMany(Resource::class)->withPivot('resource_quantity');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipe_recipe', 'recipe_id', 'content_recipe_id')->withPivot(
            'is_duplicate'
        );
    }

    public function getGradeImageAttribute()
    {
        $grade = $this->grade;

        if (empty($grade) || $grade === 'none') {
            return null;
        }

        return asset('storage') . '/' . "uploads/grade/{$grade}.png";
    }

    /*
     * Replace % on %25 for correct display percent symbol in url address
     */
    public function getImgAttribute()
    {
        return str_replace('%', '%25', $this->attributes['img']);
    }

    /**
     *  Calculate masterwork (double craft) proc chance
     *
     * Recipe levels and craft level on bow example:
     *    Vesper Thrower; Grade = S-84; Recipe lvl = 10; craft lvl = 82
     *    Icarus Spitter; Grade = S-80; Recipe lvl = 9; craft lvl = 70
     *    Dynasty Bow; Grade = S; Recipe lvl = 9; craft lvl = 70
     *    Draconic Bow; Grade = S; Recipe lvl = 9; craft lvl = 70
     *    Shyeed's Bow; Grade = A; Recipe lvl = 8; craft lvl = 62
     *    Soul Bow; Grade = A; Recipe lvl = 8; craft lvl = 62
     *    Carnage Bow; Grade = A; Recipe lvl = 7; craft lvl = 55
     *    Bow of Peril; Grade = B; Recipe lvl = 7; craft lvl = 55
     *    Dark Elven Longbow; Grade = B; Recipe lvl = 6; craft lvl = 49
     *    Eminence Bow; Grade = C; Recipe lvl = 6; craft lvl = 49
     *    Akat Longbow; Grade = C; Recipe lvl = 5; craft lvl = 43
     *    Noble Elven Bow; Grade = C; Recipe lvl = 5; craft lvl = 43
     *    Elemental Bow; Grade = C; Recipe lvl = 5; craft lvl = 43
     *    Crystallized Ice Bow; Grade = C; Recipe lvl = 4; craft lvl = 36
     *
     * Here we can see lowest grade tier item has different recipe lvl, so we don't need add recipe lvl for all item, only for lowest and top C grade.
     *
     * Use grade switch only for case if recipe lvl not set
     */
    public function getRareChanceAttribute()
    {
        $lvl = $this->attributes['lvl'];
        if ($lvl) {
            switch ($lvl) {
                case 10:
                    $craftLevel = 82;
                    break;

                case 9:
                    $craftLevel = 70;
                    break;

                case 8:
                    $craftLevel = 62;
                    break;

                case 7:
                    $craftLevel = 55;
                    break;

                case 6:
                    $craftLevel = 49;
                    break;

                case 5:
                    $craftLevel = 43;
                    break;

                case 4:
                    $craftLevel = 36;
                    break;

                case 3:
                    $craftLevel = 28;
                    break;

                case 2:
                    $craftLevel = 20;
                    break;

                case 1:
                    $craftLevel = 5;
                    break;

                case 0:
                    $craftLevel = 0;
                    break;

                default:
                    return null;
            }
        } else {
            $grade = $this->attributes['grade'];

            switch ($grade) {
                case 'S-84':
                    $craftLevel = 82;
                    break;

                case 'S-80':
                case 'S':
                    $craftLevel = 70;
                    break;

                case 'A':
                    $craftLevel = 62;
                    break;

                case 'B':
                    $craftLevel = 55;
                    break;

                case 'C':
                    $craftLevel = 43;
                    break;

                default:
                    return null;
            }
        }

        $crafterLevel = 85;

        return 3 + ($crafterLevel - $craftLevel) * 0.2;
    }

    /*
     * Get master work text
     * Items of C grade has no masterwork bonuses, instead of this they has double craft chance.
     */
    public function getMasterworkTextAttribute()
    {
        $masterWorkText = null;

        /*
         * C items has no masterwork description
         * Craft count only 1, exclude shots
         */
        if ($this->craft_count === 1 && ($this->grade === 'C' || $this->masterwork_description) && $this->grade && $this->rare_chance) {
            $chanceText = 'Шанс МВ';
            if ($this->grade === 'C') {
                $chanceText = 'Шанс дабл крафта';
            }

            $masterWorkText = 'Уровень крафтера: <b>85</b><br>';
            $masterWorkText .= $chanceText . ': <b>' . $this->rare_chance . '</b>%<br>';

            if ($this->masterwork_name) {
                $masterWorkText .= '<i>' . $this->masterwork_name . '</i><br>';
            }

            if ($this->masterwork_description) {
                $masterWorkText .= $this->attributes['masterwork_description'];
            }
        }

        return $masterWorkText;
    }

    public function getCrystalsTextAttribute()
    {
        if ($this->grade && $this->crystals_count) {
            $crystalResource = \App\Models\Resource::where('name', 'Crystal ' . $this->basic_grade)->firstOrFail();
            $crystalImgPath = asset('storage') . '/' . $crystalResource->img;
            $crystalUrl = route('resources.show', $crystalResource);
            $crystalsPrice = prettifyNumber($crystalResource->price * $this->crystals_count);

            return view('pages/recipes/crystals-text', [
                'imagePath' => $crystalImgPath,
                'url' => $crystalUrl,
                'name' => $crystalResource->name,
                'totalPrice' => $crystalsPrice,
                'count' => $this->crystals_count,
            ]);
        }

        return null;
    }

    public function getBasicGradeAttribute()
    {
        switch ($this->grade) {
            case 'S-84':
            case 'S-80':
                $basicGrade = 'S';
                break;
            default:
                $basicGrade = $this->grade;
                break;
        }

        return $basicGrade;
    }

    public function getPriceAttribute()
    {
        $user = auth()->user();

        if ($this->attributes['resource_id']) {
            $resource = $this->resource;

            $recipePriceSell = $user && $user->resources->find($resource->id) && $user->resources->find(
                $resource->id
            )->pivot->price_sell ? $user->resources->find($resource->id)->pivot->price_sell : $resource->price_sell;
        } else {
            $recipePriceSell = $user && $user->recipes->find($this->id) && $user->recipes->find(
                $this->id
            )->pivot->price_sell ? $user->recipes->find($this->id)->pivot->price_sell : $this->price_sell;
        }

        return $recipePriceSell;
    }

    public function getSaHtmlAttribute()
    {
        $saHtml = null;
        $saInfo = $this->sa_info;
        if ($saInfo) {
            $saHtml = view('pages.recipes.sa-info-show', $saInfo);
        }

        return $saHtml;
    }

    public function getSaHtmlIndexAttribute()
    {
        $saHtml = null;
        $saInfo = $this->sa_info;
        if ($saInfo) {
            $saHtml = view('pages.recipes.sa-info-index', $saInfo);
        }

        return $saHtml;
    }

    public function getSaInfoAttribute()
    {
        $saInfo = null;
        if ($this->sa_lvl) {
            $saInfo = [];
            $saLvl = $this->sa_lvl;
            $saGemCount = $this->sa_gem_count;
            $saRedName = $this->sa_red_name;
            $saRedDescription = $this->sa_red_description;
            $saGreenName = $this->sa_green_name;
            $saGreenDescription = $this->sa_green_description;
            $saBlueName = $this->sa_blue_name;
            $saBlueDescription = $this->sa_blue_description;
            $saRedImg = asset('/images/SA Red.webp');
            $saGreenImg = asset('/images/SA Green.webp');
            $saBlueImg = asset('/images/SA Blue.webp');
            $gem = \App\Models\Resource::where(
                'name',
                "Gemstone ({$this->basic_grade}-grade)"
            )->firstOrFail();
            $gemsPriceTotal = prettifyNumber($gem->price * $saGemCount);

            $saInfo['saLvl'] = $saLvl;
            $saInfo['saGemCount'] = $saGemCount;
            $saInfo['saRedName'] = $saRedName;
            $saInfo['saRedDescription'] = $saRedDescription;
            $saInfo['saGreenName'] = $saGreenName;
            $saInfo['saGreenDescription'] = $saGreenDescription;
            $saInfo['saBlueName'] = $saBlueName;
            $saInfo['saBlueDescription'] = $saBlueDescription;
            $saInfo['saRedImg'] = $saRedImg;
            $saInfo['saGreenImg'] = $saGreenImg;
            $saInfo['saBlueImg'] = $saBlueImg;
            $saInfo['gem'] = $gem;
            $saInfo['gemsPriceTotal'] = $gemsPriceTotal;
        }

        return $saInfo;
    }

    public function getBonusPvpHtmlAttribute()
    {
        $html = null;
        $bonusPvp = $this->bonus_pvp;
        if (!empty($bonusPvp['text'])) {
            $html = view('pages.recipes.pvp-info', $bonusPvp);
        }

        return $html;
    }

    public function getBonusPvpAttribute()
    {
        $bonusInfo = $this->getBonusPvpWeapon($this);
        if (!$bonusInfo) {
            $bonusInfo = $this->getBonusPvpArmor($this);
        }

        return $bonusInfo;
    }


    protected function getBonusPvpWeapon(Recipe $single)
    {
        $parentCategoryId = $this->category->category_id ?? null;
        $availableGrades = ['S', 'S-80', 'S-84'];
        $weaponCategoryId = 1;
        $isWeapon = $parentCategoryId === $weaponCategoryId;
        $isCorrectGrade = in_array($single->grade, $availableGrades);

        if (!$isWeapon || !$isCorrectGrade) {
            return null;
        }
        $cost = $this->getBonusPvpCostWeapon($this);

        $weaponPostfix = ' Перезарядка 10 сек. Увеличивает урон наносимый в PvP на 5%';
        $cancelText = 'С вероятностью 10% канселит 1-3 вражеских положительных эффектов, при атаке в PvP.';
        $bonusDamageText = 'С вероятностью 10% наносит дополнительный урон, примерно равный урону автоатаки, при атаке в PvP.';

        $text = match ($this->category->name) {
            'Bow' => 'С вероятностью 10% увеличивает Скорость Атаки на 15% в течении 10 сек., при атаке в PvP.',
            'Dagger', 'Fist' => $cancelText . ' С вероятностью 20% вешает дебаф, который значительно снижает защиту щитом в течении 10 сек, при атаке в PvP.',
            'Polearm' => $bonusDamageText,
            default => null,
        };

        if (empty($text)) {
            if ($single->is_mage) {
                $text = 'С вероятностью 5% увеличивает Скорость Каста на 15% в течении 10 сек., при получении урона в PvP.';
            } elseif ($single->is_two_hands) {
                $text = $bonusDamageText;
            } else {
                /* One hand physic weapons */
                $text = 'С вероятностью 20% восстанавливает 200 CP, при атаке в PvP.';
            }
        }
        if (empty($text)) {
            Log::warning("Grade and category correct for weapon {$single->name}, but pvp bonus text is empty.");

            return null;
        } else {
            $text .= $weaponPostfix;
        }

        return [
            'text' => $text,
            'cost' => $cost,
        ];
    }

    protected function getBonusPvpArmor(Recipe $single)
    {
        $armorCategoryId = 2;
        $category = $this->category;
        $topParentCategoryId = $category->top_parent_category->id;
        $preTopParentCategoryName = $category->pre_top_parent_category->name;

        $parentCategoryId = $this->category->category_id ?? null;
        $availableCategoryNames = [
            'Full body',
            'Upper',
        ];
        $availableGrades = [
            'S',
            'S-80',
            'S-84'
        ];
        $isArmor = $topParentCategoryId === $armorCategoryId;
        $isCorrectGrade = in_array($single->grade, $availableGrades);
        $isCorrectCategory = in_array($category->name, $availableCategoryNames);

        if (!$isArmor || !$isCorrectGrade || !$isCorrectCategory) {
            return null;
        }
        $cost = $this->getBonusPvpCostArmor($single);
        $armorPostfix = ' Перезарядка 10 сек. Уменьшает получаемый урон в PvP на 5%';
        $text = match ($preTopParentCategoryName) {
            'Robe' => 'С вероятностью 20% уменьшает Шанс получения Критического удара и уменьшает получаемый Критический Урон на 15% в течении 10 сек., при получении урона в PvP.',
            'Light' => 'С вероятностью 25% сбрасывает таргет противника, при получении урона в PvP.',
            'Heavy' => 'С вероятностью 10% уменьшает противнику Скорость на 20%, Физическую Атаку на 20%, Магическую Атаку на 30% в течении 10 сек., при получении урона в PvP.',
            default => null,
        };

        if (empty($text)) {
            Log::warning("Grade and category correct for armor {$single->name}, but pvp bonus text is empty.");

            return null;
        } else {
            $text .= $armorPostfix;
        }
        return [
            'text' => $text,
            'cost' => $cost,
        ];
    }

    protected function getBonusPvpCostWeapon(Recipe $single): ?array
    {
        /* Dynasty daggers 43 950 славы + 4 395 050 */
        /* Moirai daggers 30 400 славы + 6 089 000 */
        /* Vesper daggers 42 900 славы + 8 576 500 */
        /* Skull Edge Dagger Dual, top s84, Mamba Edge Dual Daggers 50 000 славы + 10 563 400 */

        $cost = match ($single->age) {
            's' => [
                'adena' => 1154520,
                'fame' => 11545,
            ],
            'dynasty' => [
                'adena' => 3747300,
                'fame' => 18700,
            ],
            'moirai' => [
                'adena' => 5171950,
                'fame' => 25900,
            ],
            'vesper' => [
                'adena' => 7343750,
                'fame' => 36700,
            ],
            'vorpal' => [
                'adena' => 8576500,
                'fame' => 42900,
            ],
            'elegia' => [
                'adena' => 10563400,
                'fame' => 50000,
            ],
            default => null,
        };

        return $cost;
    }

    protected function getBonusPvpCostArmor(Recipe $single): ?array
    {
        $category = $single->category;
        $preTopParentCategoryName = $category->pre_top_parent_category->name;
        $isHeavy = $preTopParentCategoryName === 'Heavy';

        $cost = match ($single->age) {
            's' => [
                'adena' => $isHeavy ? 345105 : 420570,
                'fame' => $isHeavy ? 3451 : 4206,
            ],
            'dynasty' => [
                'С эссенцией' => [
                    'adena' => $isHeavy ? 1268850 : 951630,
                    'fame' => $isHeavy ? 12689 : 9516,
                ],
                'Обычный' => [
                    'adena' => $isHeavy ? 860640 : 645480,
                    'fame' => $isHeavy ? 8606 : 6455,
                ],
            ],
            'moirai' => [
                'adena' => $isHeavy ? 1268850 : 951630,
                'fame' => $isHeavy ? 12689 : 9516,
            ],
            'vesper' => [
                'Нубл' => [
                    'adena' => $isHeavy ? 2792000 : 2094000,
                    'fame' => $isHeavy ? 14000 : 10500,
                ],
                'Обычный' => [
                    'adena' => $isHeavy ? 2333400 : 1750000,
                    'fame' => $isHeavy ? 11700 : 8800,
                ],
            ],
            'vorpal' => [
                'adena' => $isHeavy ? 2792000 : 2094000,
                'fame' => $isHeavy ? 14000 : 10500,
            ],
            'elegia' => [
                'adena' => $isHeavy ? 3347650 : 2510750,
                'fame' => $isHeavy ? 16700 : 12500,
            ],
            default => null,
        };

        return $cost;
    }

    public function getDescriptionSeoTextAttribute()
    {
        if (!empty($this->descrioption_seo)) {
            return $this->descrioption_seo;
        }
        $descriptionSeoText = "Информация об итеме {$this->name}.";
        if (!$this->is_non_craftable) {
            $descriptionSeoText .= ' Как его можно скрафтить, сколько для этого необходимо ресурсов и каковая будет стоимость.';
        } else {
            $descriptionSeoText .= ' Предмет невозможно скрафтить.';
        }

        if ($this->is_epic) {
            $descriptionSeoText .= ' Это Эпическая бижутерия.';
        }
        if ($this->is_available_for_sub_quest) {
            $descriptionSeoText .= ' Оружие можно использовать для квеста на саб класс.';
        }
        if ($this->noble_stones_for_upgrade) {
            $descriptionSeoText .= ' Предмет можно улучшить с помощью нубл камней.';
        }
        if ($this->sa_lvl) {
            $descriptionSeoText .= ' Данные о СА, его уровне, бонусах, стоимости гемов.';
        }
        if ($this->masterwork_description) {
            $descriptionSeoText .= ' Сведения о МВ (мастерворк) бонусе.';
        }
        if ($this->is_tw) {
            $descriptionSeoText .= ' Бижутерия добывается за квесты на ТВ (Территориальные войны).';
        }

        return $descriptionSeoText;
    }
}
