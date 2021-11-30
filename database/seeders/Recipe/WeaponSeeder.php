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

        seederAddRecipe( 'Flamberge', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 4 );
        seederAddRecipe( 'Storm Bringer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'шторм, меч, sword', 4 );
        seederAddRecipe( 'Mysterious Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'мистериос, меч, sword', 4 );
        seederAddRecipe( 'Shamshir', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Katana', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Spirit Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Raid Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Caliburs', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Sword of Delusion', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'делюжен, делюшен, меч, sword', 5 );
        seederAddRecipe( 'Tsurugi', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Homunkulus\' Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'хома, хомка, меч, sword', 5 );
        seederAddRecipe( 'Sword of Limit', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Sword of Nightmare', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Sword of Whispering Death', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Pa\'agrian Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 5 );
        seederAddRecipe( 'Samurai Long Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'самурай, слс, меч, sword', 6 );
        seederAddRecipe( 'Berserker Blade', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'берсеркер, меч, sword', 6 );
        seederAddRecipe( 'Ecliptic Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 6 );
        seederAddRecipe( 'Great Sword', $imagePath, 17000000, 'B', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Большой Меч, меч, sword', 6 );
        seederAddRecipe( 'Great Sword 100%', $imagePath, 17000000, 'B', $categoryId, 0, '100', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Большой Меч, меч, sword', 6 );
        seederAddRecipe( 'Keshanberk', $imagePath, 13500000, 'B', $categoryId, 0, '60', 'Добавляет 17.42 Физ. Атк.', 'Destruction', 1, false, 'Кешанберк, кешенберк, Кашенберк, кашенберг, kashenberk, меч, sword', 6 );
        seederAddRecipe( 'Keshanberk 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Добавляет 17.42 Физ. Атк.', 'Destruction', 1, false, 'Кешанберк, кешенберк, Кашенберк, кашенберг, kashenberk, меч, sword', 6 );
        seederAddRecipe( 'Sword of Valhalla', $imagePath, 15000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 187', 'Nature', 1, false, 'Меч Вальхаллы, Валя, Валька, меч, sword', 6 );
        seederAddRecipe( 'Sword of Valhalla 100%', $imagePath, 15000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 187', 'Nature', 1, false, 'Меч Вальхаллы, Валя, Валька, меч, sword', 6 );
        seederAddRecipe( 'Damascus Sword', $imagePath, 20000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Дамаскус, меч, sword' );
        seederAddRecipe( 'Damascus Sword 100%', $imagePath, 20000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Дамаскус, меч, sword' );
        seederAddRecipe( 'Guardian\'s Sword', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Меч Стража, Гвардиан, меч, sword' );
        seederAddRecipe( 'Guardian\'s Sword 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Меч Стража, Гвардиан, меч, sword' );
        seederAddRecipe( 'Wizard\'s Tear', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Слезы Чародея, визард, визарт, меч, sword' );
        seederAddRecipe( 'Wizard\'s Tear 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Слезы Чародея, визард, визарт, меч, sword' );
        seederAddRecipe( 'Tallum Blade', $imagePath, 19000000, 'A', $categoryId, 0, '60', 'Добавляет 22.1 Физ. Атк.', 'Destruction', 1, false, 'Клинок Таллума, меч, sword', 7 );
        seederAddRecipe( 'Elemental Sword', $imagePath, 17000000, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Меч Стихий, елементал, элементал, меч, sword', 7 );
        seederAddRecipe( 'Infernal Master', $imagePath, 22000000, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.9', 'Concentration', 1, false, 'Мастер Инферно, inferno, меч, sword', 7 );
        seederAddRecipe( 'Dragon Slayer', $imagePath, 44000000, 'A', $categoryId, 0, '60', 'Увеличивает Вампиризм на 3', 'Evil Spirit', 1, false, 'Убийца Драконов, драгон, слеер, меч, sword' );
        seederAddRecipe( 'Sword of Miracles', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Силу Хила на 37', 'Holy Spirit', 1, false, 'Легендарный Меч, сом, som, миракл, меч, sword' );
        seederAddRecipe( 'Dark Legion\'s Edge', $imagePath, 53000000, 'A', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 220', 'Thunder', 1, false, 'Темный Легион, меч, sword' );
        seederAddRecipe( 'Sirra\'s Blade', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Клинок Сирры, сиры, сира, сирра, меч, sword' );
        seederAddRecipe( 'Sword of Ipos', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает HP на 398', 'Earth', 1, false, 'Меч Ипоса, меч, sword' );
        seederAddRecipe( 'Themis\' Tongue', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Язык Темиса, меч, sword' );
        seederAddRecipe( 'Forgotten Blade', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Забытый Клинок, fg, фг, меч, sword' );
        seederAddRecipe( 'Heavens Divider', $imagePath, 74000000, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 340', 'Thunder', 1, false, 'Разделитель Небес, хд. hd, меч, sword' );
        seederAddRecipe( 'Dynasty Sword', $imagePath, 160000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Меч Династии, дино, меч, sword' );
        seederAddRecipe( 'Dynasty Blade', $imagePath, 135000000, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Клинок Династии, дино, меч, sword' );
        seederAddRecipe( 'Dynasty Phantom', $imagePath, 165000000, 'S', $categoryId, 0, '60', 'Увеличивает MP на 334', 'Nature', 1, false, 'Фантом Династии, дино, меч, sword' );
        seederAddRecipe( 'Icarus Sawsword', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 42.12', 'Destruction', 1, false, 'Зазубренный Меч Икара, ик, меч, sword' );
        seederAddRecipe( 'Icarus Spirit', $imagePath, 130000000, 'S-80', $categoryId, 0, '60', 'Увеличивает HP на 334', 'Nature', 1, false, 'Дух Икара, спирит, ик, меч, sword' );
        seederAddRecipe( 'Icarus Heavy Arms', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Тяжелые Руки Икара, ик, меч, sword' );
        seederAddRecipe( 'Vesper Cutter', $imagePath, 250000000, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Thunder', 1, false, 'Резак Венеры, кутер, веспер, меч, sword' );
        seederAddRecipe( 'Vesper Slasher', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Эспадон Венеры, слешер, веспер, меч, sword' );
        seederAddRecipe( 'Vesper Buster', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Clevernes', 1, false, 'Расчленитель Венеры, бустер, веспер, меч, sword' );
    }

    protected function addBlunts() {
        $categoryId = $this->bluntCategory->id;
        $imagePath  = 'item/weapon/blunt';

        seederAddRecipe( 'Big Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 4 );
        seederAddRecipe( 'Battle Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 4 );
        seederAddRecipe( 'Silver Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 4 );
        seederAddRecipe( 'Skull Graver', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 4 );
        seederAddRecipe( 'Heavy Doom Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 4 );
        seederAddRecipe( 'Crystal Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 4 );
        seederAddRecipe( 'Stick of Faith', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 4 );
        seederAddRecipe( 'Heavy Doom Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 4 );
        seederAddRecipe( 'Cursed Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Dwarven War Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'War Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'вар акс', 5 );
        seederAddRecipe( 'Nirvana Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Stick of Eternity', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Paradia Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Inferno Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'инферно', 5 );
        seederAddRecipe( 'Pa\'agrio Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Sage\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Club of Nature', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Mace of Underworld', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Karik Horn', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Pa\'agrio Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5 );
        seederAddRecipe( 'Deadman\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6 );
        seederAddRecipe( 'Ghoul\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6 );
        seederAddRecipe( 'Demon\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6 );
        seederAddRecipe( 'Yaksa Mace', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'якса', 6 );
        seederAddRecipe( 'Ecliptic Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6 );
        seederAddRecipe( 'Dwarven Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6 );
        seederAddRecipe( 'Heavy War Axe', $imagePath, 13000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Тяжелый Топор Войны, вар акс', 6 );
        seederAddRecipe( 'Heavy War Axe 100%', $imagePath, 13000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Тяжелый Топор Войны, вар акс', 6 );
        seederAddRecipe( 'Spirit\'s Staff', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Посох Духа, спирит стаф', 6 );
        seederAddRecipe( 'Spirit\'s Staff 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Посох Духа, спирит стаф', 6 );
        seederAddRecipe( 'Spell Breaker', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Рассеиватель Заклинания, спел брейкер', 6 );
        seederAddRecipe( 'Spell Breaker 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Рассеиватель Заклинания, спел брейкер', 6 );
        seederAddRecipe( 'Ice Storm Hammer', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Ледяной Бури', 6 );
        seederAddRecipe( 'Ice Storm Hammer 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Ледяной Бури', 6 );
        seederAddRecipe( 'Deadman\'s Glory', $imagePath, 21000000, 'B', $categoryId, 0, '60', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Мертвеца' );
        seederAddRecipe( 'Deadman\'s Glory 100%', $imagePath, 21000000, 'B', $categoryId, 0, '100', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Мертвеца' );
        seederAddRecipe( 'Art of Battle Axe', $imagePath, 21000000, 'B', $categoryId, 0, '60', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Искусства Войны, аоба, aoba' );
        seederAddRecipe( 'Art of Battle Axe 100%', $imagePath, 21000000, 'B', $categoryId, 0, '100', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Искусства Войны, аоба, aoba' );
        seederAddRecipe( 'Staff of Evil Spirits', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Увеличивает Силу Хила на 33', 'Holy Spirit', 1, false, 'Посох Злых Духов, спирит' );
        seederAddRecipe( 'Staff of Evil Spirits 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Увеличивает Силу Хила на 33', 'Holy Spirit', 1, false, 'Посох Злых Духов, спирит' );
        seederAddRecipe( 'Kaim Vanul\'s Bones', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Кости Каим Ванула' );
        seederAddRecipe( 'Kaim Vanul\'s Bones 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Кости Каим Ванула' );
        seederAddRecipe( 'Star Buster', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Звезда Боли' );
        seederAddRecipe( 'Star Buster 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Звезда Боли' );
        seederAddRecipe( 'Dasparion\'s Staff', $imagePath, 22000000, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 27.63', 'Hail', 1, false, 'Посох Даспариона', 7 );
        seederAddRecipe( 'Meteor Shower', $imagePath, 21000000, 'A', $categoryId, 0, '60', 'Увеличивает HP на 345', 'Earth', 1, false, 'Метеоритный Дождь', 7 );
        seederAddRecipe( 'Spiritual Eye', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 27.63', 'Hail', 1, false, 'Глаз Духа', 7 );
        seederAddRecipe( 'Destroyer Hammer', $imagePath, 28000000, 'A', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Разрушителя, дестроер', 7 );
        seederAddRecipe( 'Elysian', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Элизиум' );
        seederAddRecipe( 'Branch of the Mother Tree', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает HP на 239', 'Nature', 1, false, 'Ветвь Древа Жизни, бранч' );
        seederAddRecipe( 'Flaming Dragon Skull', $imagePath, 0, 'A', $categoryId, 0, '60', 'Снижает Потребление MP магических умений на 5%', 'Wisdom', 1, false, 'Пылающий Череп Дракона, драгон скулл' );
        seederAddRecipe( 'Doom Crusher', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 415', 'Thunder', 1, false, 'Крушитель Рока, дум' );
        seederAddRecipe( 'Barakiel\'s Axe', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Топор Баракиэля' );
        seederAddRecipe( 'Behemoth\' Tuning Fork', $imagePath, 65000000, 'A', $categoryId, 0, '60', 'Добавляет 32.97 Физ. Атк.', 'Destruction', 1, false, 'Трезубец Чудовища, бегемот' );
        seederAddRecipe( 'Cabrio\'s Hand', $imagePath, 60000000, 'A', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Рука Кабрио' );
        seederAddRecipe( 'Daimon Crystal', $imagePath, 84000000, 'A', $categoryId, 0, '60', 'Снижает Потребление MP на 5%', 'Wisdom', 1, false, 'Кристалл Дэймона' );
        seederAddRecipe( 'Basalt Battlehammer', $imagePath, 67000000, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 4.2', 'Concentration', 1, false, 'Базальтовый Боевой Молот, басальт' );
        seederAddRecipe( 'Imperial Staff', $imagePath, 50000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 289', 'Nature', 1, false, 'Имперский Посох, империал стафф' );
        seederAddRecipe( 'Dragon Hunter Axe', $imagePath, 72000000, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 415', 'Thunder', 1, false, 'Топор Охотника на Драконов, драгон хантер' );
        seederAddRecipe( 'Arcana Mace', $imagePath, 87000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 289', 'Nature', 1, false, 'Посох Тайн, аркана' );
        seederAddRecipe( 'Dynasty Cudgel', $imagePath, 147000000, 'S', $categoryId, 0, '60', 'С вероятностью 8% оглушает врага при физической атаке)', 'Landslide', 1, false, 'Дубина Династии, дино' );
        seederAddRecipe( 'Dynasty Mace', $imagePath, 185000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Булава Династии, мейс, дино' );
        seederAddRecipe( 'Dynasty Staff', $imagePath, 195000000, 'S', $categoryId, 0, '60', 'Увеличивает Силу Хила на 43', 'Holy Spirit', 1, false, 'Посох Династии, стафф, дино' );
        seederAddRecipe( 'Dynasty Crusher', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Крушитель Династии, дино крашер, крушак' );
        seederAddRecipe( 'Icarus Hammer', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает HP на 511', 'Earth', 1, false, 'Молот Икара, ик хаммер,' );
        seederAddRecipe( 'Icarus Hall', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 45.81', 'Hail', 1, false, 'Холл Икара, ик' );
        seederAddRecipe( 'Vesper Avenger', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'С вероятностью 8% оглушает врага при физической атаке', 'Landslide', 1, false, 'Мститель Венеры, веспер' );
        seederAddRecipe( 'Vesper Retributer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Возмездие Венеры, ретрик, веспер' );
        seederAddRecipe( 'Vesper Caster', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Заклинатель Венеры, кастер, веспер' );
        seederAddRecipe( 'Vesper Singer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 45.81', 'Hail', 1, false, 'Певец Венеры, сингер, веспер' );
    }

    protected function addBows() {
        $categoryId = $this->bowCategory->id;
        $imagePath  = 'item/weapon/bow';

        seederAddRecipe( 'Crystallized Ice Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кристалайз лук', 6 );
        seederAddRecipe( 'Elemental Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'елементал лук', 5 );
        seederAddRecipe( 'Noble Elven Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'лук', 5 );
        seederAddRecipe( 'Akat Longbow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'акат лук', 5 );
        seederAddRecipe( 'Eminence Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'емик эмик лук', 6 );
        seederAddRecipe( 'Dark Elven Longbow', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Длинный Лук Темных Эльфов', 6 );
        seederAddRecipe( 'Dark Elven Longbow 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Длинный Лук Темных Эльфов', 6 );
        seederAddRecipe( 'Bow of Peril', $imagePath, 24000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Угрозы, боп, bop, перил' );
        seederAddRecipe( 'Bow of Peril 100%', $imagePath, 24000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Угрозы, боп, bop, перил' );
        seederAddRecipe( 'Carnage Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Кровавый Лук, коряга, корняга, корнаж, каряга, лук', 7 );
        seederAddRecipe( 'Soul Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Дальность Стрельбы на 100', 'Clairvoyance', 1, false, 'Пронзатель Душ, сб, sb, лук' );
        seederAddRecipe( 'Shyeed\'s Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Лук Шиид,' );
        seederAddRecipe( 'Draconic Bow', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Дракона, драконик лук' );
        seederAddRecipe( 'Dynasty Bow', $imagePath, 140000000, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Лук Династии, дино' );
        seederAddRecipe( 'Icarus Spitter', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Лук Икара, ик спитер' );
        seederAddRecipe( 'Vesper Thrower', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Увеличивает Дальность Стрельбы на 100', 'Clairvoyance', 1, false, 'Бросок Венеры, веспер лук' );
    }

    protected function addDaggers() {
        $categoryId = $this->daggerCategory->id;
        $imagePath  = 'item/weapon/dagger';

        seederAddRecipe( 'Cursed Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 4 );
        seederAddRecipe( 'Dark Elven Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 4 );
        seederAddRecipe( 'Stiletto', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 5 );
        seederAddRecipe( 'Soulfire Dirk', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 5 );
        seederAddRecipe( 'Grace Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 5 );
        seederAddRecipe( 'Dark Screamer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дс ds дарк скример дагер, даггер, dagger, dager', 5 );
        seederAddRecipe( 'Crystal Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кристал дагер, даггер, dagger, dager', 6 );
        seederAddRecipe( 'Kris', $imagePath, 14000000, 'B', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Крис дагер, даггер, dagger, dager', 6 );
        seederAddRecipe( 'Kris 100%', $imagePath, 14000000, 'B', $categoryId, 0, '100', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Крис дагер, даггер, dagger, dager', 6 );
        seederAddRecipe( 'Hell Knife', $imagePath, 14000000, 'B', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Нож Ада, Twilight Knife дагер, даггер, dagger, dager', 6 );
        seederAddRecipe( 'Hell Knife 100%', $imagePath, 14000000, 'B', $categoryId, 0, '100', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Нож Ада, Twilight Knife дагер, даггер, dagger, dager', 6 );
        seederAddRecipe( 'Demon\'s Dagger', $imagePath, 24000000, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Кинжал Демона, демон дагер, даггер, dagger, dager' );
        seederAddRecipe( 'Demon\'s Dagger 100%', $imagePath, 24000000, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Кинжал Демона, демон дагер, даггер, dagger, dager' );
        seederAddRecipe( 'Bloody Orchid', $imagePath, 19000000, 'A', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Кровавая Орхидея, блудик, орчид дагер, даггер, dagger, dager', 7 );
        seederAddRecipe( 'Soul Separator', $imagePath, 47000000, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Душегуб, сепоратор дагер, даггер, dagger, dager' );
        seederAddRecipe( 'Naga Storm', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 5% отравляет врага при физической атаки', 'Molar', 1, false, 'Буря Наги, нага дагер, даггер, dagger, dager' );
        seederAddRecipe( 'Angel Slayer', $imagePath, 68000000, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Убийца Ангелов, as, ангел дагер, даггер, dagger, dager' );
        seederAddRecipe( 'Dynasty Knife', $imagePath, 195000000, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Нож Династии, дино дагер, даггер, dagger, dager' );
        seederAddRecipe( 'Icarus Disperser', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Распылитель Икара, ик нож дагер, даггер, dagger, dager' );
        seederAddRecipe( 'Vesper Shaper', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Острие Венеры, шапер, веспер нож дагер, даггер, dagger, dager' );
    }

    protected function addPolearms() {
        $categoryId = $this->polearmCategory->id;
        $imagePath  = 'item/weapon/polearm';

        seederAddRecipe( 'Scythe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пика, алебарда, древковое', 4 );
        seederAddRecipe( 'Orcish Glaive', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'оркиш пика, алебарда, древковое', 4 );
        seederAddRecipe( 'Body Slasher', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пика, алебарда, древковое', 4 );
        seederAddRecipe( 'Bec de Corbin', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пика, алебарда, древковое', 5 );
        seederAddRecipe( 'Poleaxe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пика, алебарда, древковое', 5 );
        seederAddRecipe( 'Scorpion', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пика, алебарда, древковое', 5 );
        seederAddRecipe( 'Widow Maker', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пика, алебарда, древковое', 5 );
        seederAddRecipe( 'Orcish Poleaxe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'оркиш пика, алебарда, древковое', 6 );
        seederAddRecipe( 'Great Axe', $imagePath, 16000000, 'B', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 156', 'Thunder', 1, false, 'Двуручный Топор, пика, алебарда, древковое', 6 );
        seederAddRecipe( 'Great Axe 100%', $imagePath, 16000000, 'B', $categoryId, 0, '100', 'Увеличивает мощь критической атаки на 156', 'Thunder', 1, false, 'Двуручный Топор, пика, алебарда, древковое' );
        seederAddRecipe( 'Lance', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Пика, ланс, пика, алебарда, древковое' );
        seederAddRecipe( 'Lance 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Пика, ланс, пика, алебарда, древковое' );
        seederAddRecipe( 'Halberd', $imagePath, 26000000, 'A', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Алебарда, халберд, пика, алебарда, древковое', 7 );
        seederAddRecipe( 'Tallum Glaive', $imagePath, 45000000, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Глефа Таллума, глейв, пика, алебарда, древковое' );
        seederAddRecipe( 'Tiphon\'s Spear', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Копье Тифона, пика, алебарда, древковое' );
        seederAddRecipe( 'Saint Spear', $imagePath, 65000000, 'S', $categoryId, 0, '60', 'Добавляет 31.25 Физ. Атк.', 'Destruction', 1, false, 'Святое Копье, саинт, сс, ss, пика, алебарда, древковое' );
        seederAddRecipe( 'Dynasty Halberd', $imagePath, 160000000, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Алебарда Династии, дино, пика, алебарда, древковое' );
        seederAddRecipe( 'Icarus Trident', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 377', 'Thunder', 1, false, 'Трезубец Икара, ик тридент, пика, алебарда, древковое' );
        seederAddRecipe( 'Vesper Stormer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Thunder', 1, false, 'Буревестник Венеры, веспер штормет, стормер, пика, алебарда, древковое' );
    }

    protected function addFists() {
        $categoryId = $this->fistCategory->id;
        $imagePath  = 'item/weapon/fist';

        seederAddRecipe( 'Chakram', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'когти, кастеты, костеты, кости', 4 );
        seederAddRecipe( 'Knuckle Duster', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'когти, кастеты, костеты, кости', 5 );
        seederAddRecipe( 'Fisted Blade', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'когти, кастеты, костеты, кости', 5 );
        seederAddRecipe( 'Great Pata', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пата когти, кастеты, костеты, кости', 6 );
        seederAddRecipe( 'Arthro Nail', $imagePath, 13000000, 'B', $categoryId, 0, '60', 'Добавляет 21.2 Физ. Атк.', 'Destruction', 1, false, 'Коготь Артро, артро нейл, когти, кастеты, костеты, кости', 6 );
        seederAddRecipe( 'Arthro Nail 100%', $imagePath, 13000000, 'B', $categoryId, 0, '100', 'Добавляет 21.2 Физ. Атк.', 'Destruction', 1, false, 'Коготь Артро, артро нейл, когти, кастеты, костеты, кости', 6 );
        seederAddRecipe( 'Bellion Cestus', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Цестус Беллиона, беллионы, белионы, когти, кастеты, костеты, кости' );
        seederAddRecipe( 'Bellion Cestus 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Цестус Беллиона, беллионы, белионы, когти, кастеты, костеты, кости' );
        seederAddRecipe( 'Blood Tornado', $imagePath, 0, 'A', $categoryId, 0, '60', 'Добавляет 26.9 Физ. Атк.', 'Destruction', 1, false, 'Кровавое Торнадо, блуд, блудик, когти, кастеты, костеты, кости', 7 );
        seederAddRecipe( 'Dragon Grinder', $imagePath, 39000000, 'A', $categoryId, 0, '60', 'Увеличивает HP на 372', 'Earth', 1, false, 'Погибель Дракона, драгон гриндер, когти, кастеты, костеты, кости' );
        seederAddRecipe( 'Sobekk\'s Hurricane', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Ураган Собекка, когти, кастеты, костеты, кости' );
        seederAddRecipe( 'Demon Splinter', $imagePath, 58000000, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 528', 'Thunder', 1, false, 'Демон Одиночка, сплинтер, когти, кастеты, костеты, кости' );
        seederAddRecipe( 'Dynasty Bagh-Nakh', $imagePath, 110000000, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Коготь Тигра Династии, дино, когти, кастеты, костеты, кости' );
        seederAddRecipe( 'Icarus Hand', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Добавляет 51.26 Физ. Атк.', 'Destruction', 1, false, 'Рука Икара, ик, когти, кастеты, костеты, кости' );
        seederAddRecipe( 'Vesper Fighter', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Воитель Венеры, веспер когти, кастеты, костеты, кости' );
    }

}
