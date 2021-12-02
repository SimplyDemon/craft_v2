<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder {
    protected Category $swordCategory;
    protected Category $bluntCategory;
    protected Category $bowCategory;
    protected Category $daggerCategory;
    protected Category $polearmCategory;
    protected Category $fistCategory;

    public function seed() {
        $this->setWeaponCategories();
        $this->addWeapons();
    }

    protected function addWeapons() {
        $this->addSwords();
        $this->addBlunts();
        $this->addBows();
        $this->addDaggers();
        $this->addPolearms();
        $this->addFists();
    }

    protected function setWeaponCategories() {
        $this->swordCategory   = Category::where( 'name', 'Sword' )->firstOrFail();
        $this->bluntCategory   = Category::where( 'name', 'Blunt' )->firstOrFail();
        $this->bowCategory     = Category::where( 'name', 'Bow' )->firstOrFail();
        $this->daggerCategory  = Category::where( 'name', 'Dagger' )->firstOrFail();
        $this->polearmCategory = Category::where( 'name', 'Polearm' )->firstOrFail();
        $this->fistCategory    = Category::where( 'name', 'Fist' )->firstOrFail();
        $this->fistCategory    = Category::where( 'name', 'Fist' )->firstOrFail();
    }

    protected function addSwords() {
        $categoryId = $this->swordCategory->id;
        $imagePath  = 'item/weapon/sword';

        seederAddRecipe( 'Flamberge', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Storm Bringer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'шторм, меч, sword', 4, 705 );
        seederAddRecipe( 'Mysterious Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'мистериос, меч, sword', 4, 705 );
        seederAddRecipe( 'Shamshir', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Katana', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Spirit Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Raid Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Caliburs', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Sword of Delusion', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'делюжен, делюшен, меч, sword', 5, 1322 );
        seederAddRecipe( 'Tsurugi', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Homunkulus\' Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'хома, хомка, меч, sword', 5, 1322 );
        seederAddRecipe( 'Sword of Limit', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Sword of Nightmare', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Sword of Whispering Death', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Pa\'agrian Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Samurai Long Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'самурай, слс, меч, sword', 6, 1885 );
        seederAddRecipe( 'Berserker Blade', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'берсеркер, меч, sword', 6, 1885 );
        seederAddRecipe( 'Ecliptic Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 6, 1885 );
        seederAddRecipe( 'Great Sword', $imagePath, 17000000, 'B', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Большой Меч, меч, sword', 6, 891 );
        seederAddRecipe( 'Great Sword 100%', $imagePath, 17000000, 'B', $categoryId, 0, '100', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Большой Меч, меч, sword', 6, 891 );
        seederAddRecipe( 'Keshanberk', $imagePath, 13500000, 'B', $categoryId, 0, '60', 'Добавляет 17.42 Физ. Атк.', 'Destruction', 1, false, 'Кешанберк, кешенберк, Кашенберк, кашенберг, kashenberk, меч, sword', 6, 891 );
        seederAddRecipe( 'Keshanberk 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Добавляет 17.42 Физ. Атк.', 'Destruction', 1, false, 'Кешанберк, кешенберк, Кашенберк, кашенберг, kashenberk, меч, sword', 6, 891 );
        seederAddRecipe( 'Sword of Valhalla', $imagePath, 15000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 187', 'Nature', 1, false, 'Меч Вальхаллы, Валя, Валька, меч, sword', 6, 891 );
        seederAddRecipe( 'Sword of Valhalla 100%', $imagePath, 15000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 187', 'Nature', 1, false, 'Меч Вальхаллы, Валя, Валька, меч, sword', 6, 891 );
        seederAddRecipe( 'Damascus Sword', $imagePath, 20000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Дамаскус, меч, sword', null, 1346 );
        seederAddRecipe( 'Damascus Sword 100%', $imagePath, 20000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Дамаскус, меч, sword', null, 1346 );
        seederAddRecipe( 'Guardian\'s Sword', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Меч Стража, Гвардиан, меч, sword', null, 1346 );
        seederAddRecipe( 'Guardian\'s Sword 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Меч Стража, Гвардиан, меч, sword', null, 1346 );
        seederAddRecipe( 'Wizard\'s Tear', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Слезы Чародея, визард, визарт, меч, sword', null, 1346 );
        seederAddRecipe( 'Wizard\'s Tear 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Слезы Чародея, визард, визарт, меч, sword', null, 1346 );
        seederAddRecipe( 'Tallum Blade', $imagePath, 19000000, 'A', $categoryId, 0, '60', 'Добавляет 22.1 Физ. Атк.', 'Destruction', 1, false, 'Клинок Таллума, меч, sword', 7, 1128 );
        seederAddRecipe( 'Elemental Sword', $imagePath, 17000000, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Меч Стихий, елементал, элементал, меч, sword', 7, 1128 );
        seederAddRecipe( 'Infernal Master', $imagePath, 22000000, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.9', 'Concentration', 1, false, 'Мастер Инферно, inferno, меч, sword', 7, 1128 );
        seederAddRecipe( 'Dragon Slayer', $imagePath, 44000000, 'A', $categoryId, 0, '60', 'Увеличивает Вампиризм на 3', 'Evil Spirit', 1, false, 'Убийца Драконов, драгон, слеер, меч, sword', null, 1659 );
        seederAddRecipe( 'Sword of Miracles', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Силу Хила на 37', 'Holy Spirit', 1, false, 'Легендарный Меч, сом, som, миракл, меч, sword', null, 1659 );
        seederAddRecipe( 'Dark Legion\'s Edge', $imagePath, 53000000, 'A', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 220', 'Thunder', 1, false, 'Темный Легион, меч, sword', null, 1659 );
        seederAddRecipe( 'Sirra\'s Blade', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Клинок Сирры, сиры, сира, сирра, меч, sword', null, 2157 );
        seederAddRecipe( 'Sword of Ipos', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает HP на 398', 'Earth', 1, false, 'Меч Ипоса, меч, sword', null, 2157 );
        seederAddRecipe( 'Themis\' Tongue', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Язык Темиса, меч, sword', null, 2157 );
        seederAddRecipe( 'Forgotten Blade', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Забытый Клинок, fg, фг, меч, sword', null, 2052 );
        seederAddRecipe( 'Heavens Divider', $imagePath, 74000000, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 340', 'Thunder', 1, false, 'Разделитель Небес, хд. hd, меч, sword', null, 2052 );
        seederAddRecipe( 'Dynasty Sword', $imagePath, 160000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Меч Династии, дино, меч, sword', null, 3597 );
        seederAddRecipe( 'Dynasty Blade', $imagePath, 135000000, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Клинок Династии, дино, меч, sword', null, 3597 );
        seederAddRecipe( 'Dynasty Phantom', $imagePath, 165000000, 'S', $categoryId, 0, '60', 'Увеличивает MP на 334', 'Nature', 1, false, 'Фантом Династии, дино, меч, sword', null, 3597 );
        seederAddRecipe( 'Icarus Sawsword', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 42.12', 'Destruction', 1, false, 'Зазубренный Меч Икара, ик, меч, sword', null, 4965 );
        seederAddRecipe( 'Icarus Spirit', $imagePath, 130000000, 'S-80', $categoryId, 0, '60', 'Увеличивает HP на 334', 'Nature', 1, false, 'Дух Икара, спирит, ик, меч, sword', null, 4965 );
        seederAddRecipe( 'Icarus Heavy Arms', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Тяжелые Руки Икара, ик, меч, sword', null, 4965 );
        seederAddRecipe( 'Vesper Cutter', $imagePath, 250000000, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Thunder', 1, false, 'Резак Венеры, кутер, веспер, меч, sword', null, 7050 );
        seederAddRecipe( 'Vesper Slasher', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Эспадон Венеры, слешер, веспер, меч, sword', null, 7050 );
        seederAddRecipe( 'Vesper Buster', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Clevernes', 1, false, 'Расчленитель Венеры, бустер, веспер, меч, sword', null, 7050 );
    }

    protected function addBlunts() {
        $categoryId = $this->bluntCategory->id;
        $imagePath  = 'item/weapon/blunt';

        seederAddRecipe( 'Big Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Battle Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Silver Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Skull Graver', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Heavy Doom Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Crystal Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Stick of Faith', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Heavy Doom Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Cursed Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Dwarven War Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'War Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'вар акс', 5, 1322 );
        seederAddRecipe( 'Nirvana Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Stick of Eternity', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Paradia Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Inferno Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'инферно', 5, 1322 );
        seederAddRecipe( 'Pa\'agrio Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Sage\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5, 1322 );
        seederAddRecipe( 'Club of Nature', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Mace of Underworld', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Karik Horn', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Pa\'agrio Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1471 );
        seederAddRecipe( 'Deadman\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 1885 );
        seederAddRecipe( 'Ghoul\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 1885 );
        seederAddRecipe( 'Demon\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6, 1885 );
        seederAddRecipe( 'Yaksa Mace', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'якса', 6, 1885 );
        seederAddRecipe( 'Ecliptic Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6, 1885 );
        seederAddRecipe( 'Dwarven Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6, 1885 );
        seederAddRecipe( 'Heavy War Axe', $imagePath, 13000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Тяжелый Топор Войны, вар акс', 6, 891 );
        seederAddRecipe( 'Heavy War Axe 100%', $imagePath, 13000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Тяжелый Топор Войны, вар акс', 6, 891 );
        seederAddRecipe( 'Spirit\'s Staff', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Посох Духа, спирит стаф', 6, 891 );
        seederAddRecipe( 'Spirit\'s Staff 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Посох Духа, спирит стаф', 6, 891 );
        seederAddRecipe( 'Spell Breaker', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Рассеиватель Заклинания, спел брейкер', 6, 891 );
        seederAddRecipe( 'Spell Breaker 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Рассеиватель Заклинания, спел брейкер', 6, 891 );
        seederAddRecipe( 'Ice Storm Hammer', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Ледяной Бури', 6, 891 );
        seederAddRecipe( 'Ice Storm Hammer 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Ледяной Бури', 6, 891 );
        seederAddRecipe( 'Deadman\'s Glory', $imagePath, 21000000, 'B', $categoryId, 0, '60', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Мертвеца', null, 1346 );
        seederAddRecipe( 'Deadman\'s Glory 100%', $imagePath, 21000000, 'B', $categoryId, 0, '100', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Мертвеца', null, 1346 );
        seederAddRecipe( 'Art of Battle Axe', $imagePath, 21000000, 'B', $categoryId, 0, '60', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Искусства Войны, аоба, aoba', null, 1346 );
        seederAddRecipe( 'Art of Battle Axe 100%', $imagePath, 21000000, 'B', $categoryId, 0, '100', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Искусства Войны, аоба, aoba', null, 1346 );
        seederAddRecipe( 'Staff of Evil Spirits', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Увеличивает Силу Хила на 33', 'Holy Spirit', 1, false, 'Посох Злых Духов, спирит', null, 1346 );
        seederAddRecipe( 'Staff of Evil Spirits 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Увеличивает Силу Хила на 33', 'Holy Spirit', 1, false, 'Посох Злых Духов, спирит', null, 1346 );
        seederAddRecipe( 'Kaim Vanul\'s Bones', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Кости Каим Ванула', null, 1346 );
        seederAddRecipe( 'Kaim Vanul\'s Bones 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Кости Каим Ванула', null, 1346 );
        seederAddRecipe( 'Star Buster', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Звезда Боли', null, 1346 );
        seederAddRecipe( 'Star Buster 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Звезда Боли', null, 1346 );
        seederAddRecipe( 'Dasparion\'s Staff', $imagePath, 22000000, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 27.63', 'Hail', 1, false, 'Посох Даспариона', 7, 1128 );
        seederAddRecipe( 'Meteor Shower', $imagePath, 21000000, 'A', $categoryId, 0, '60', 'Увеличивает HP на 345', 'Earth', 1, false, 'Метеоритный Дождь', 7, 1128 );
        seederAddRecipe( 'Spiritual Eye', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 27.63', 'Hail', 1, false, 'Глаз Духа', 7, 1128 );
        seederAddRecipe( 'Destroyer Hammer', $imagePath, 28000000, 'A', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Разрушителя, дестроер', 7, 1128 );
        seederAddRecipe( 'Elysian', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Элизиум', null, 1659 );
        seederAddRecipe( 'Branch of the Mother Tree', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает HP на 239', 'Nature', 1, false, 'Ветвь Древа Жизни, бранч', null, 1659 );
        seederAddRecipe( 'Flaming Dragon Skull', $imagePath, 0, 'A', $categoryId, 0, '60', 'Снижает Потребление MP магических умений на 5%', 'Wisdom', 1, false, 'Пылающий Череп Дракона, драгон скулл', null, 1659 );
        seederAddRecipe( 'Doom Crusher', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 415', 'Thunder', 1, false, 'Крушитель Рока, дум', null, 1659 );
        seederAddRecipe( 'Barakiel\'s Axe', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Топор Баракиэля', null, 2157 );
        seederAddRecipe( 'Behemoth\' Tuning Fork', $imagePath, 65000000, 'A', $categoryId, 0, '60', 'Добавляет 32.97 Физ. Атк.', 'Destruction', 1, false, 'Трезубец Чудовища, бегемот', null, 2157 );
        seederAddRecipe( 'Cabrio\'s Hand', $imagePath, 60000000, 'A', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Рука Кабрио', null, 2157 );
        seederAddRecipe( 'Daimon Crystal', $imagePath, 84000000, 'A', $categoryId, 0, '60', 'Снижает Потребление MP на 5%', 'Wisdom', 1, false, 'Кристалл Дэймона', null, 2157 );
        seederAddRecipe( 'Basalt Battlehammer', $imagePath, 67000000, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 4.2', 'Concentration', 1, false, 'Базальтовый Боевой Молот, басальт', null, 2052 );
        seederAddRecipe( 'Imperial Staff', $imagePath, 50000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 289', 'Nature', 1, false, 'Имперский Посох, империал стафф', null, 2052 );
        seederAddRecipe( 'Dragon Hunter Axe', $imagePath, 72000000, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 415', 'Thunder', 1, false, 'Топор Охотника на Драконов, драгон хантер', null, 2052 );
        seederAddRecipe( 'Arcana Mace', $imagePath, 87000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 289', 'Nature', 1, false, 'Посох Тайн, аркана', null, 2052 );
        seederAddRecipe( 'Dynasty Cudgel', $imagePath, 147000000, 'S', $categoryId, 0, '60', 'С вероятностью 8% оглушает врага при физической атаке)', 'Landslide', 1, false, 'Дубина Династии, дино', null, 3597 );
        seederAddRecipe( 'Dynasty Mace', $imagePath, 185000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Булава Династии, мейс, дино', null, 3597 );
        seederAddRecipe( 'Dynasty Staff', $imagePath, 195000000, 'S', $categoryId, 0, '60', 'Увеличивает Силу Хила на 43', 'Holy Spirit', 1, false, 'Посох Династии, стафф, дино', null, 3597 );
        seederAddRecipe( 'Dynasty Crusher', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Крушитель Династии, дино крашер, крушак', null, 3597 );
        seederAddRecipe( 'Icarus Hammer', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает HP на 511', 'Earth', 1, false, 'Молот Икара, ик хаммер,', false, 4965 );
        seederAddRecipe( 'Icarus Hall', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 45.81', 'Hail', 1, false, 'Холл Икара, ик', false, 4965 );
        seederAddRecipe( 'Vesper Avenger', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'С вероятностью 8% оглушает врага при физической атаке', 'Landslide', 1, false, 'Мститель Венеры, веспер', false, 7050 );
        seederAddRecipe( 'Vesper Retributer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Возмездие Венеры, ретрик, веспер', false, 7050 );
        seederAddRecipe( 'Vesper Caster', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Заклинатель Венеры, кастер, веспер', false, 7050 );
        seederAddRecipe( 'Vesper Singer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 45.81', 'Hail', 1, false, 'Певец Венеры, сингер, веспер', false, 7050 );
    }

    protected function addBows() {
        $categoryId = $this->bowCategory->id;
        $imagePath  = 'item/weapon/bow';

        seederAddRecipe( 'Crystallized Ice Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кристалайз лук', 6, 705 );
        seederAddRecipe( 'Elemental Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Noble Elven Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Akat Longbow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'акат лук', 5, 1322 );
        seederAddRecipe( 'Eminence Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'емик эмик лук', 6, 1885 );
        seederAddRecipe( 'Dark Elven Longbow', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Длинный Лук Темных Эльфов', 6, 891 );
        seederAddRecipe( 'Dark Elven Longbow 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Длинный Лук Темных Эльфов', 6, 891 );
        seederAddRecipe( 'Bow of Peril', $imagePath, 24000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Угрозы, боп, bop, перил', null, 1346 );
        seederAddRecipe( 'Bow of Peril 100%', $imagePath, 24000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Угрозы, боп, bop, перил', null, 1346 );
        seederAddRecipe( 'Carnage Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Кровавый Лук, коряга, корняга, корнаж, каряга, лук', 7, 1128 );
        seederAddRecipe( 'Soul Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Дальность Стрельбы на 100', 'Clairvoyance', 1, false, 'Пронзатель Душ, сб, sb, лук', null, 1659 );
        seederAddRecipe( 'Shyeed\'s Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Лук Шиид,', null, 2157 );
        seederAddRecipe( 'Draconic Bow', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Дракона, драконик лук', null, 2052 );
        seederAddRecipe( 'Dynasty Bow', $imagePath, 140000000, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Лук Династии, дино', null, 3597 );
        seederAddRecipe( 'Icarus Spitter', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Лук Икара, ик спитер', null, 4965 );
        seederAddRecipe( 'Vesper Thrower', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Увеличивает Дальность Стрельбы на 100', 'Clairvoyance', 1, false, 'Бросок Венеры, веспер лук', null, 7050 );
    }

    protected function addDaggers() {
        $categoryId = $this->daggerCategory->id;
        $imagePath  = 'item/weapon/dagger';

        seederAddRecipe( 'Cursed Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Dark Elven Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 4, 705 );
        seederAddRecipe( 'Stiletto', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Soulfire Dirk', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Grace Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 5, 1322 );
        seederAddRecipe( 'Dark Screamer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дс ds дарк скример дагер, даггер, dagger, dager', 5, 1322 );
        seederAddRecipe( 'Crystal Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кристал дагер, даггер, dagger, dager', 6, 1885 );
        seederAddRecipe( 'Kris', $imagePath, 14000000, 'B', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Крис дагер, даггер, dagger, dager', 6, 891 );
        seederAddRecipe( 'Kris 100%', $imagePath, 14000000, 'B', $categoryId, 0, '100', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Крис дагер, даггер, dagger, dager', 6, 891 );
        seederAddRecipe( 'Hell Knife', $imagePath, 14000000, 'B', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Нож Ада, Twilight Knife дагер, даггер, dagger, dager', 6, 891 );
        seederAddRecipe( 'Hell Knife 100%', $imagePath, 14000000, 'B', $categoryId, 0, '100', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Нож Ада, Twilight Knife дагер, даггер, dagger, dager', 6, 891 );
        seederAddRecipe( 'Demon\'s Dagger', $imagePath, 24000000, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Кинжал Демона, демон дагер, даггер, dagger, dager', 1346 );
        seederAddRecipe( 'Demon\'s Dagger 100%', $imagePath, 24000000, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Кинжал Демона, демон дагер, даггер, dagger, dager', 1346 );
        seederAddRecipe( 'Bloody Orchid', $imagePath, 19000000, 'A', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Кровавая Орхидея, блудик, орчид дагер, даггер, dagger, dager', 7, 1128 );
        seederAddRecipe( 'Soul Separator', $imagePath, 47000000, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Душегуб, сепоратор дагер, даггер, dagger, dager', null, 1659 );
        seederAddRecipe( 'Naga Storm', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 5% отравляет врага при физической атаки', 'Molar', 1, false, 'Буря Наги, нага дагер, даггер, dagger, dager', null, 2157 );
        seederAddRecipe( 'Angel Slayer', $imagePath, 68000000, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Убийца Ангелов, as, ангел дагер, даггер, dagger, dager', null, 2052 );
        seederAddRecipe( 'Dynasty Knife', $imagePath, 195000000, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Нож Династии, дино дагер, даггер, dagger, dager', null, 3597 );
        seederAddRecipe( 'Icarus Disperser', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Распылитель Икара, ик нож дагер, даггер, dagger, dager', null, 4965 );
        seederAddRecipe( 'Vesper Shaper', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Острие Венеры, шапер, веспер нож дагер, даггер, dagger, dager', null, 7050 );
    }

    protected function addPolearms() {
        $categoryId = $this->polearmCategory->id;
        $imagePath  = 'item/weapon/polearm';

        seederAddRecipe( 'Scythe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Orcish Glaive', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Body Slasher', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Bec de Corbin', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Poleaxe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Scorpion', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1471 );
        seederAddRecipe( 'Widow Maker', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1471 );
        seederAddRecipe( 'Orcish Poleaxe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'оркиш пика, алебарда, древковое', 6, 1885 );
        seederAddRecipe( 'Great Axe', $imagePath, 16000000, 'B', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 156', 'Thunder', 1, false, 'Двуручный Топор, пика, алебарда, древковое', 6, 891 );
        seederAddRecipe( 'Great Axe 100%', $imagePath, 16000000, 'B', $categoryId, 0, '100', 'Увеличивает мощь критической атаки на 156', 'Thunder', 1, false, 'Двуручный Топор, пика, алебарда, древковое', 891 );
        seederAddRecipe( 'Lance', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Пика, ланс, пика, алебарда, древковое', 1346 );
        seederAddRecipe( 'Lance 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Пика, ланс, пика, алебарда, древковое', 1346 );
        seederAddRecipe( 'Halberd', $imagePath, 26000000, 'A', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Алебарда, халберд, пика, алебарда, древковое', 7, 1128 );
        seederAddRecipe( 'Tallum Glaive', $imagePath, 45000000, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Глефа Таллума, глейв, пика, алебарда, древковое', null, 1659 );
        seederAddRecipe( 'Tiphon\'s Spear', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Копье Тифона, пика, алебарда, древковое', null, 2157 );
        seederAddRecipe( 'Saint Spear', $imagePath, 65000000, 'S', $categoryId, 0, '60', 'Добавляет 31.25 Физ. Атк.', 'Destruction', 1, false, 'Святое Копье, саинт, сс, ss, пика, алебарда, древковое', null, 2052 );
        seederAddRecipe( 'Dynasty Halberd', $imagePath, 160000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Алебарда Династии, дино, пика, алебарда, древковое', null, 3597 );
        seederAddRecipe( 'Icarus Trident', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 377', 'Thunder', 1, false, 'Трезубец Икара, ик тридент, пика, алебарда, древковое', null, 4965 );
        seederAddRecipe( 'Vesper Stormer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Thunder', 1, false, 'Буревестник Венеры, веспер штормет, стормер, пика, алебарда, древковое', null, 7050 );
    }

    protected function addFists() {
        $categoryId = $this->fistCategory->id;
        $imagePath  = 'item/weapon/fist';

        seederAddRecipe( 'Chakram', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705 );
        seederAddRecipe( 'Knuckle Duster', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884 );
        seederAddRecipe( 'Fisted Blade', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322 );
        seederAddRecipe( 'Great Pata', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пата когти, кастеты, костеты, кости', 6, 1885 );
        seederAddRecipe( 'Arthro Nail', $imagePath, 13000000, 'B', $categoryId, 0, '60', 'Добавляет 21.2 Физ. Атк.', 'Destruction', 1, false, 'Коготь Артро, артро нейл, когти, кастеты, костеты, кости', 6, 891 );
        seederAddRecipe( 'Arthro Nail 100%', $imagePath, 13000000, 'B', $categoryId, 0, '100', 'Добавляет 21.2 Физ. Атк.', 'Destruction', 1, false, 'Коготь Артро, артро нейл, когти, кастеты, костеты, кости', 6, 891 );
        seederAddRecipe( 'Bellion Cestus', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Цестус Беллиона, беллионы, белионы, когти, кастеты, костеты, кости', 1346 );
        seederAddRecipe( 'Bellion Cestus 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Цестус Беллиона, беллионы, белионы, когти, кастеты, костеты, кости', 1346 );
        seederAddRecipe( 'Blood Tornado', $imagePath, 0, 'A', $categoryId, 0, '60', 'Добавляет 26.9 Физ. Атк.', 'Destruction', 1, false, 'Кровавое Торнадо, блуд, блудик, когти, кастеты, костеты, кости', 7, 1128 );
        seederAddRecipe( 'Dragon Grinder', $imagePath, 39000000, 'A', $categoryId, 0, '60', 'Увеличивает HP на 372', 'Earth', 1, false, 'Погибель Дракона, драгон гриндер, когти, кастеты, костеты, кости', null, 1659 );
        seederAddRecipe( 'Sobekk\'s Hurricane', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Ураган Собекка, когти, кастеты, костеты, кости', null, 2157 );
        seederAddRecipe( 'Demon Splinter', $imagePath, 58000000, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 528', 'Thunder', 1, false, 'Демон Одиночка, сплинтер, когти, кастеты, костеты, кости', null, 2052 );
        seederAddRecipe( 'Dynasty Bagh-Nakh', $imagePath, 110000000, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Коготь Тигра Династии, дино, когти, кастеты, костеты, кости', null, 3597 );
        seederAddRecipe( 'Icarus Hand', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Добавляет 51.26 Физ. Атк.', 'Destruction', 1, false, 'Рука Икара, ик, когти, кастеты, костеты, кости', null, 4965 );
        seederAddRecipe( 'Vesper Fighter', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Воитель Венеры, веспер когти, кастеты, костеты, кости', null, 7050 );
    }

}
