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

        seederAddRecipe( 'Great Sword', $imagePath, 17000000, 'B', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Lightning', 1, false, 'Большой Меч' );
        seederAddRecipe( 'Great Sword 100%', $imagePath, 17000000, 'B', $categoryId, 0, '100', 'Adds Rate Crit by 54.4', 'Lightning', 1, false, 'Большой Меч' );
        seederAddRecipe( 'Keshanberk', $imagePath, 13500000, 'B', $categoryId, 0, '60', 'Adds P.Atk by 17.42', 'Destruction', 1, false, 'Кешанберк, кешенберк, Кашенберк, кашенберг, kashenberk' );
        seederAddRecipe( 'Keshanberk 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds P.Atk by 17.42', 'Destruction', 1, false, 'Кешанберк, кешенберк, Кашенберк, кашенберг, kashenberk' );
        seederAddRecipe( 'Sword of Valhalla', $imagePath, 15000000, 'B', $categoryId, 0, '60', 'Adds Max MP by 187', 'Nature', 1, false, 'Меч Вальхаллы, Валя, Валька' );
        seederAddRecipe( 'Sword of Valhalla 100%', $imagePath, 15000000, 'B', $categoryId, 0, '100', 'Adds Max MP by 187', 'Nature', 1, false, 'Меч Вальхаллы, Валя, Валька' );
        seederAddRecipe( 'Damascus Sword', $imagePath, 20000000, 'B', $categoryId, 0, '60', 'Adds Max HP by 319', 'Earth', 1, false, 'Дамаскус' );
        seederAddRecipe( 'Damascus Sword 100%', $imagePath, 20000000, 'B', $categoryId, 0, '100', 'Adds Max HP by 319', 'Earth', 1, false, 'Дамаскус' );
        seederAddRecipe( 'Guardian\'s Sword', $imagePath, 0, 'B', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Меч Стража, Гвардиан' );
        seederAddRecipe( 'Guardian\'s Sword 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Меч Стража, Гвардиан' );
        seederAddRecipe( 'Wizard\'s Tear', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Cleverness', 1, false, 'Слезы Чародея, визард, визарт' );
        seederAddRecipe( 'Wizard\'s Tear 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Multiplies Regen MP by 1.05', 'Cleverness', 1, false, 'Слезы Чародея, визард, визарт' );
        seederAddRecipe( 'Tallum Blade', $imagePath, 19000000, 'A', $categoryId, 0, '60', 'Adds P.Atk by 22.1', 'Destruction', 1, false, 'Клинок Таллума' );
        seederAddRecipe( 'Elemental Sword', $imagePath, 17000000, 'A', $categoryId, 0, '60', 'Adds M.Atk by 21.77', 'Hail', 1, false, 'Меч Стихий, елементал, элементал' );
        seederAddRecipe( 'Infernal Master', $imagePath, 22000000, 'A', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.9', 'Concentration', 1, false, 'Мастер Инферно, inferno' );
        seederAddRecipe( 'Dragon Slayer', $imagePath, 44000000, 'A', $categoryId, 0, '60', 'Adds Life Steal by 3', 'Evil Spirit', 1, false, 'Убийца Драконов, драгон, слеер' );
        seederAddRecipe( 'Sword of Miracles', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds Bonus Hp by 37', 'Holy Spirit', 1, false, 'Легендарный Меч, сом, som, миракл' );
        seederAddRecipe( 'Dark Legion\'s Edge', $imagePath, 53000000, 'A', $categoryId, 0, '60', 'Adds Crit. Atk Add by 220', 'Thunder', 1, false, 'Темный Легион' );
        seederAddRecipe( 'Sirra\'s Blade', $imagePath, 0, 'A', $categoryId, 0, '60', 'Has a 6% chance to stun the enemy during a regular attack', 'Landslide', 1, false, 'Клинок Сирры, сиры, сира, сирра' );
        seederAddRecipe( 'Sword of Ipos', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds Max HP by 398', 'Earth', 1, false, 'Меч Ипоса' );
        seederAddRecipe( 'Themis\' Tongue', $imagePath, 0, 'A', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Cleverness', 1, false, 'Язык Темиса' );
        seederAddRecipe( 'Forgotten Blade', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Lightning', 1, false, 'Забытый Клинок, fg, фг' );
        seederAddRecipe( 'Heavens Divider', $imagePath, 74000000, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 340', 'Thunder', 1, false, 'Разделитель Небес, хд. hd' );
        seederAddRecipe( 'Dynasty Sword', $imagePath, 160000000, 'S', $categoryId, 0, '60', 'Increases Max HP by 492', 'Earth', 1, false, 'Меч Династии, дино' );
        seederAddRecipe( 'Dynasty Blade', $imagePath, 135000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Клинок Династии, дино' );
        seederAddRecipe( 'Dynasty Phantom', $imagePath, 165000000, 'S', $categoryId, 0, '60', 'Increases Max MP by 334', 'Nature', 1, false, 'Фантом Династии, дино' );
        seederAddRecipe( 'Icarus Sawsword', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Increases P. Atk by 42.12', 'Destruction', 1, false, 'Зазубренный Меч Икара, ик' );
        seederAddRecipe( 'Icarus Spirit', $imagePath, 130000000, 'S-80', $categoryId, 0, '60', 'Adds Max MP by 334', 'Nature', 1, false, 'Дух Икара, спирит, ик' );
        seederAddRecipe( 'Icarus Heavy Arms', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Lightning', 1, false, 'Тяжелые Руки Икара, ик' );
        seederAddRecipe( 'Vesper Cutter', $imagePath, 250000000, 'S-84', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Thunder', 1, false, 'Резак Венеры, кутер, веспер' );
        seederAddRecipe( 'Vesper Slasher', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale', 1, false, 'Эспадон Венеры, слешер, веспер' );
        seederAddRecipe( 'Vesper Buster', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Clevernes', 1, false, 'Расчленитель Венеры, бустер, веспер' );
    }

    protected function addBlunts() {
        $categoryId = $this->bluntCategory->id;
        $imagePath  = 'item/weapon/blunt';

        seederAddRecipe( 'Heavy War Axe', $imagePath, 13000000, 'B', $categoryId, 0, '60', 'Adds Max HP by 319', 'Earth', 1, false, 'Тяжелый Топор Войны, вар акс' );
        seederAddRecipe( 'Heavy War Axe 100%', $imagePath, 13000000, 'B', $categoryId, 0, '100', 'Adds Max HP by 319', 'Earth', 1, false, 'Тяжелый Топор Войны, вар акс' );
        seederAddRecipe( 'Spirit\'s Staff', $imagePath, 0, 'B', $categoryId, 0, '60', 'Adds M.Atk by 21.77', 'Hail', 1, false, 'Посох Духа, спирит стаф' );
        seederAddRecipe( 'Spirit\'s Staff 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds M.Atk by 21.77', 'Hail', 1, false, 'Посох Духа, спирит стаф' );
        seederAddRecipe( 'Spell Breaker', $imagePath, 0, 'B', $categoryId, 0, '60', 'Adds M.Atk by 21.77', 'Hail', 1, false, 'Рассеиватель Заклинания, спел брейкер' );
        seederAddRecipe( 'Spell Breaker 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds M.Atk by 21.77', 'Hail', 1, false, 'Рассеиватель Заклинания, спел брейкер' );
        seederAddRecipe( 'Ice Storm Hammer', $imagePath, 0, 'B', $categoryId, 0, '60', 'Adds Rate Crit by 52.2', 'Lightning', 1, false, 'Молот Ледяной Бури' );
        seederAddRecipe( 'Ice Storm Hammer 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Rate Crit by 52.2', 'Lightning', 1, false, 'Молот Ледяной Бури' );
        seederAddRecipe( 'Deadman\'s Glory', $imagePath, 21000000, 'B', $categoryId, 0, '60', 'Has a 5% chance to stun the enemy during a regular attack.', 'Landslide', 1, false, 'Топор Мертвеца' );
        seederAddRecipe( 'Deadman\'s Glory 100%', $imagePath, 21000000, 'B', $categoryId, 0, '100', 'Has a 5% chance to stun the enemy during a regular attack.', 'Landslide', 1, false, 'Топор Мертвеца' );
        seederAddRecipe( 'Art of Battle Axe', $imagePath, 21000000, 'B', $categoryId, 0, '60', 'Has a 5% chance to stun the enemy during a regular attack.', 'Landslide', 1, false, 'Топор Искусства Войны, аоба, aoba' );
        seederAddRecipe( 'Art of Battle Axe 100%', $imagePath, 21000000, 'B', $categoryId, 0, '100', 'Has a 5% chance to stun the enemy during a regular attack.', 'Landslide', 1, false, 'Топор Искусства Войны, аоба, aoba' );
        seederAddRecipe( 'Staff of Evil Spirits', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Adds Bonus Hp by 33', 'Holy Spirit', 1, false, 'Посох Злых Духов, спирит' );
        seederAddRecipe( 'Staff of Evil Spirits 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Adds Bonus Hp by 33', 'Holy Spirit', 1, false, 'Посох Злых Духов, спирит' );
        seederAddRecipe( 'Kaim Vanul\'s Bones', $imagePath, 0, 'B', $categoryId, 0, '60', 'Adds Max HP by 319', 'Earth', 1, false, 'Кости Каим Ванула' );
        seederAddRecipe( 'Kaim Vanul\'s Bones 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Max HP by 319', 'Earth', 1, false, 'Кости Каим Ванула' );
        seederAddRecipe( 'Star Buster', $imagePath, 0, 'B', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Звезда Боли' );
        seederAddRecipe( 'Star Buster 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Звезда Боли' );
        seederAddRecipe( 'Dasparion\'s Staff', $imagePath, 22000000, 'A', $categoryId, 0, '60', 'Adds M.Atk by 27.63', 'Hail', 1, false, 'Посох Даспариона' );
        seederAddRecipe( 'Meteor Shower', $imagePath, 21000000, 'A', $categoryId, 0, '60', 'Adds Max HP by 345', 'Earth', 1, false, 'Метеоритный Дождь' );
        seederAddRecipe( 'Spiritual Eye', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds M.Atk by 27.63', 'Hail', 1, false, 'Глаз Духа' );
        seederAddRecipe( 'Destroyer Hammer', $imagePath, 28000000, 'A', $categoryId, 0, '60', 'Adds Rate Crit by 52.2', 'Lightning', 1, false, 'Молот Разрушителя, дестроер' );
        seederAddRecipe( 'Elysian', $imagePath, 0, 'A', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Элизиум' );
        seederAddRecipe( 'Branch of the Mother Tree', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds Max MP by 239', 'Nature', 1, false, 'Ветвь Древа Жизни, бранч' );
        seederAddRecipe( 'Flaming Dragon Skull', $imagePath, 0, 'A', $categoryId, 0, '60', 'Multiplies Magical MP Consume Rate by 0.95', 'Wisdom', 1, false, 'Пылающий Череп Дракона, драгон скулл' );
        seederAddRecipe( 'Doom Crusher', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds Crit. Atk Add by 415', 'Thunder', 1, false, 'Крушитель Рока, дум' );
        seederAddRecipe( 'Barakiel\'s Axe', $imagePath, 0, 'A', $categoryId, 0, '60', 'Multiplies Regen HP by 1.05', 'On Fire', 1, false, 'Топор Баракиэля' );
        seederAddRecipe( 'Behemoth\' Tuning Fork', $imagePath, 65000000, 'A', $categoryId, 0, '60', 'Adds P.Atk by 32.97', 'Destruction', 1, false, 'Трезубец Чудовища, бегемот' );
        seederAddRecipe( 'Cabrio\'s Hand', $imagePath, 60000000, 'A', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Cleverness', 1, false, 'Рука Кабрио' );
        seederAddRecipe( 'Daimon Crystal', $imagePath, 84000000, 'A', $categoryId, 0, '60', 'Multiplies MP Consume Rate by 0.95', 'Wisdom', 1, false, 'Кристалл Дэймона' );
        seederAddRecipe( 'Basalt Battlehammer', $imagePath, 67000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 4.2', 'Concentration', 1, false, 'Базальтовый Боевой Молот, басальт' );
        seederAddRecipe( 'Imperial Staff', $imagePath, 50000000, 'S', $categoryId, 0, '60', 'Adds Max MP by 289', 'Nature', 1, false, 'Имперский Посох, империал стафф' );
        seederAddRecipe( 'Dragon Hunter Axe', $imagePath, 72000000, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 415', 'Thunder', 1, false, 'Топор Охотника на Драконов, драгон хантер' );
        seederAddRecipe( 'Arcana Mace', $imagePath, 87000000, 'S', $categoryId, 0, '60', 'Adds Max MP by 289', 'Nature', 1, false, 'Посох Тайн, аркана' );
        seederAddRecipe( 'Dynasty Cudgel', $imagePath, 147000000, 'S', $categoryId, 0, '60', 'Has a chance to stun the enemy during a regular attack. (chance = 8%)', 'Landslide', 1, false, 'Дубина Династии, дино' );
        seederAddRecipe( 'Dynasty Mace', $imagePath, 185000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 492', 'Earth', 1, false, 'Булава Династии, мейс, дино' );
        seederAddRecipe( 'Dynasty Staff', $imagePath, 195000000, 'S', $categoryId, 0, '60', 'Increases the power of ones own recovery magic by 43', 'Holy Spirit', 1, false, 'Посох Династии, стафф, дино' );
        seederAddRecipe( 'Dynasty Crusher', $imagePath, 0, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Крушитель Династии, дино крашер, крушак' );
        seederAddRecipe( 'Icarus Hammer', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Max HP by 511', 'Earth', 1, false, 'Молот Икара, ик хаммер, хамер' );
        seederAddRecipe( 'Icarus Hall', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds M.Atk by 45.81', 'Hail', 1, false, 'Холл Икара, ик' );
        seederAddRecipe( 'Vesper Avenger', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Has a chance to stun the enemy during a regular attack. (chance = 8%)', 'Landslide', 1, false, 'Мститель Венеры, веспер' );
        seederAddRecipe( 'Vesper Retributer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale', 1, false, 'Возмездие Венеры, ретрик, веспер' );
        seederAddRecipe( 'Vesper Caster', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Multiplies Regen MP by 1.05', 'Cleverness', 1, false, 'Заклинатель Венеры, кастер, веспер' );
        seederAddRecipe( 'Vesper Singer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Adds M.Atk by 45.81', 'Hail', 1, false, 'Певец Венеры, сингер, веспер' );
    }

    protected function addBows() {
        $categoryId = $this->bowCategory->id;
        $imagePath  = 'item/weapon/bow';

        seederAddRecipe( 'Dark Elven Longbow', $imagePath, 0, 'B', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration', 1, false, 'Длинный Лук Темных Эльфов' );
        seederAddRecipe( 'Dark Elven Longbow 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Adds Accuracy Combat by 3.3', 'Concentration', 1, false, 'Длинный Лук Темных Эльфов' );
        seederAddRecipe( 'Bow of Peril', $imagePath, 24000000, 'B', $categoryId, 0, '60', 'Adds Max HP by 444', 'Earth', 1, false, 'Лук Угрозы, боп, bop, перил' );
        seederAddRecipe( 'Bow of Peril 100%', $imagePath, 24000000, 'B', $categoryId, 0, '100', 'Adds Max HP by 444', 'Earth', 1, false, 'Лук Угрозы, боп, bop, перил' );
        seederAddRecipe( 'Carnage Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration', 1, false, 'Кровавый Лук, коряга, корняга, корнаж, каряга, лук' );
        seederAddRecipe( 'Soul Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds P.Atk Range by 100', 'Clairvoyance', 1, false, 'Пронзатель Душ, сб, sb, лук' );
        seederAddRecipe( 'Shyeed\'s Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration', 1, false, 'Лук Шиид,' );
        seederAddRecipe( 'Draconic Bow', $imagePath, 60000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 444', 'Earth', 1, false, 'Лук Дракона, драк лук' );
        seederAddRecipe( 'Dynasty Bow', $imagePath, 140000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Лук Династии, дино' );
        seederAddRecipe( 'Icarus Spitter', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration', 1, false, 'Лук Икара, ик спитер' );
        seederAddRecipe( 'Vesper Thrower', $imagePath, 200000000, 'S-84', $categoryId, 0, '60', 'Adds P.Atk Range by 100', 'Clairvoyance', 1, false, 'Бросок Венеры, веспер лук' );
    }

    protected function addDaggers() {
        $categoryId = $this->daggerCategory->id;
        $imagePath  = 'item/weapon/dagger';

        seederAddRecipe( 'Kris', $imagePath, 14000000, 'B', $categoryId, 0, '60', 'Adds Rate Evasion by 3.3', 'Confusion', 1, false, 'Крис дагер даггер dagger dager' );
        seederAddRecipe( 'Kris 100%', $imagePath, 14000000, 'B', $categoryId, 0, '100', 'Adds Rate Evasion by 3.3', 'Confusion', 1, false, 'Крис дагер даггер dagger dager' );
        seederAddRecipe( 'Hell Knife', $imagePath, 14000000, 'B', $categoryId, 0, '60', 'Adds Rate Evasion by 3.3', 'Confusion', 1, false, 'Нож Ада, Twilight Knife дагер даггер dagger dager' );
        seederAddRecipe( 'Hell Knife 100%', $imagePath, 14000000, 'B', $categoryId, 0, '100', 'Adds Rate Evasion by 3.3', 'Confusion', 1, false, 'Нож Ада, Twilight Knife дагер даггер dagger dager' );
        seederAddRecipe( 'Demon\'s Dagger', $imagePath, 24000000, 'B', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Кинжал Демона, демон дагер даггер dagger dager' );
        seederAddRecipe( 'Demon\'s Dagger 100%', $imagePath, 24000000, 'B', $categoryId, 0, '100', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Кинжал Демона, демон дагер даггер dagger dager' );
        seederAddRecipe( 'Bloody Orchid', $imagePath, 19000000, 'A', $categoryId, 0, '60', 'Adds Rate Evasion by 3.3', 'Confusion', 1, false, 'Кровавая Орхидея, блудик, орчид дагер даггер dagger dager' );
        seederAddRecipe( 'Soul Separator', $imagePath, 47000000, 'A', $categoryId, 0, '60', 'Multiplies Regen HP by 1.05', 'On Fire', 1, false, 'Душегуб, сепоратор дагер даггер dagger dager' );
        seederAddRecipe( 'Naga Storm', $imagePath, 0, 'A', $categoryId, 0, '60', 'Has a chance 5% to poison the enemy during a regular attack', 'Molar', 1, false, 'Буря Наги, нага дагер даггер dagger dager' );
        seederAddRecipe( 'Angel Slayer', $imagePath, 68000000, 'S', $categoryId, 0, '60', 'Adds Accuracy Combat by 3.3', 'Concentration', 1, false, 'Убийца Ангелов, as, ангел дагер даггер dagger dager' );
        seederAddRecipe( 'Dynasty Knife', $imagePath, 195000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Нож Династии, дино дагер даггер dagger dager' );
        seederAddRecipe( 'Icarus Disperser', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Rate Evasion by 3.3', 'Confusion', 1, false, 'Распылитель Икара, ик нож дагер даггер dagger dager' );
        seederAddRecipe( 'Vesper Shaper', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale', 1, false, 'Острие Венеры, шапер, веспер нож дагер даггер dagger dager' );
    }

    protected function addPolearms() {
        $categoryId = $this->polearmCategory->id;
        $imagePath  = 'item/weapon/polearm';

        seederAddRecipe( 'Great Axe', $imagePath, 16000000, 'B', $categoryId, 0, '60', 'Adds Crit. Atk Add by 156', 'Thunder', 1, false, 'Двуручный Топор, пика, алебарда, древковое' );
        seederAddRecipe( 'Great Axe 100%', $imagePath, 16000000, 'B', $categoryId, 0, '100', 'Adds Crit. Atk Add by 156', 'Thunder', 1, false, 'Двуручный Топор, пика, алебарда, древковое' );
        seederAddRecipe( 'Lance', $imagePath, 22000000, 'B', $categoryId, 0, '60', 'Adds Max HP by 319', 'Earth', 1, false, 'Пика, ланс, пика, алебарда, древковое' );
        seederAddRecipe( 'Lance 100%', $imagePath, 22000000, 'B', $categoryId, 0, '100', 'Adds Max HP by 319', 'Earth', 1, false, 'Пика, ланс, пика, алебарда, древковое' );
        seederAddRecipe( 'Halberd', $imagePath, 26000000, 'A', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Lightning', 1, false, 'Алебарда, халберд, пика, алебарда, древковое' );
        seederAddRecipe( 'Tallum Glaive', $imagePath, 45000000, 'A', $categoryId, 0, '60', 'Multiplies Regen HP by 1.05', 'On Fire', 1, false, 'Глефа Таллума, глейв, пика, алебарда, древковое' );
        seederAddRecipe( 'Tiphon\'s Spear', $imagePath, 0, 'A', $categoryId, 0, '60', 'Has a chance 6% to stun the enemy during a regular attack', 'Landslide', 1, false, 'Копье Тифона, пика, алебарда, древковое' );
        seederAddRecipe( 'Saint Spear', $imagePath, 65000000, 'S', $categoryId, 0, '60', 'Adds P.Atk by 31.25', 'Destruction', 1, false, 'Святое Копье, саинт, сс, ss, пика, алебарда, древковое' );
        seederAddRecipe( 'Dynasty Halberd', $imagePath, 160000000, 'S', $categoryId, 0, '60', 'Adds Max HP by 492', 'Earth', 1, false, 'Алебарда Династии, дино, пика, алебарда, древковое' );
        seederAddRecipe( 'Icarus Trident', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds Crit. Atk Add by 377', 'Thunder', 1, false, 'Трезубец Икара, ик тридент, пика, алебарда, древковое' );
        seederAddRecipe( 'Vesper Stormer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Adds Rate Crit by 54.4', 'Thunder', 1, false, 'Буревестник Венеры, веспер штормет, стормер, пика, алебарда, древковое' );
    }

    protected function addFists() {
        $categoryId = $this->fistCategory->id;
        $imagePath  = 'item/weapon/fist';

        seederAddRecipe( 'Arthro Nail', $imagePath, 13000000, 'B', $categoryId, 0, '60', 'Adds P.Atk by 21.2', 'Destruction', 1, false, 'Коготь Артро, артро нейл, когти, кастеты, костеты' );
        seederAddRecipe( 'Arthro Nail 100%', $imagePath, 13000000, 'B', $categoryId, 0, '100', 'Adds P.Atk by 21.2', 'Destruction', 1, false, 'Коготь Артро, артро нейл, когти, кастеты, костеты' );
        seederAddRecipe( 'Bellion Cestus', $imagePath, 0, 'B', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Цестус Беллиона, беллионы, белионы, когти, кастеты, костеты' );
        seederAddRecipe( 'Bellion Cestus 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Цестус Беллиона, беллионы, белионы, когти, кастеты, костеты' );
        seederAddRecipe( 'Blood Tornado', $imagePath, 0, 'A', $categoryId, 0, '60', 'Adds P.Atk by 26.9', 'Destruction', 1, false, 'Кровавое Торнадо, блуд, блудик, когти, кастеты, костеты' );
        seederAddRecipe( 'Dragon Grinder', $imagePath, 39000000, 'A', $categoryId, 0, '60', 'Adds Max HP by 372', 'Earth', 1, false, 'Погибель Дракона, драгон гриндер, когти, кастеты, костеты' );
        seederAddRecipe( 'Sobekk\'s Hurricane', $imagePath, 0, 'A', $categoryId, 0, '60', 'Has a chance 6% to stun the enemy during a regular attack', 'Landslide', 1, false, 'Ураган Собекка, когти, кастеты, костеты' );
        seederAddRecipe( 'Demon Splinter', $imagePath, 58000000, 'S', $categoryId, 0, '60', 'Adds Crit. Atk Add by 528', 'Thunder', 1, false, 'Демон Одиночка, сплинтер, когти, кастеты, костеты' );
        seederAddRecipe( 'Dynasty Bagh-Nakh', $imagePath, 110000000, 'S', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Great Gale', 1, false, 'Коготь Тигра Династии, дино, когти, кастеты, костеты' );
        seederAddRecipe( 'Icarus Hand', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Adds P.Atk by 51.26', 'Destruction', 1, false, 'Рука Икара, ик, когти, кастеты, костеты' );
        seederAddRecipe( 'Vesper Fighter', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Multiplies P.Atk Speed by 1.05', 'Gale', 1, false, 'Воитель Венеры, веспер когти, кастеты, костеты' );
    }

}
