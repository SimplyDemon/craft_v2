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

        seederAddRecipe( 'Flamberge', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Critical Damage', 'Focus', 'Light', 'Увеличивает Физ. Атк. на 174 при критической атаке', 'Увеличивает Физ. Крит. Атк. на 86', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'StormBringer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'шторм, меч, sword', 4, 705,
            5, 97, 'Critical Anger', 'Focus', 'Light', 'Уменьшает HP на 12 Увеличивает Физ. Атк. на 248 при критической атаке', 'Увеличивает Физ. Крит. Атк. на 86', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Mysterious Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'мистериос, меч, sword', 4, 705,
            5, 97, 'Acumen', 'M. Atk.', 'Magic Weakness', 'Увеличивает Скорость Каста на 15%', 'При использовании магии увеличивает расход MP на 15% и Маг. Атк. на 75', 'Даёт 8% шанс колдовства Weakness при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Shamshir', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Guidance', 'Back Blow', 'Rsk. Or Evasion', 'Увеличивает Точность на 6', 'Увеличивает Физ. Крит. Атк. на 67 при атаке сзади', 'Увеличивает Уклонение на 7 при HP 60% и ниже' );
        seederAddRecipe( 'Katana', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Focus', 'Critical Damage', 'Haste', 'Увеличивает Физ. Крит. Атк. на 82', 'Увеличивает Физ. Атк. на 194 при критической атаке', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Spirit Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Critical Damage', 'Critical Poison', 'Haste', 'Увеличивает Физ. Атк. на 194 при критической атаке', 'Вероятность отравить цель 15% при критической атаке', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Raid Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Focus', 'Critical Drain', 'Critical Poison', 'Увеличивает Физ. Крит. Атк. на 82', 'Поглощает 9 НР цели при критической атаке', 'Вероятность отравить цель 15% при критической атаке' );
        seederAddRecipe( 'Caliburs', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Guidance', 'Focus', 'Critical Damage', 'Увеличивает Точность на 5', 'Увеличивает Физ. Крит. Атк. на 77', 'Увеличивает Физ. Атк. на 213 при критической атаке' );
        seederAddRecipe( 'Sword of Delusion', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'делюжен, делюшен, меч, sword', 5, 1322,
            7, 306, 'Focus', 'Health', 'Rsk. Haste', 'Увеличивает Физ. Крит. Атк. на 77', 'Увеличивает HP на 25%', 'Увеличивает Скорость атаки на 12% при HP 60% и ниже' );
        seederAddRecipe( 'Tsurugi', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Focus', 'Critical Damage', 'Haste', 'Увеличивает Физ. Крит. Атк. на 77', 'Увеличивает Физ. Атк. на 213 при критической атаке', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Homunkulus\' Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'хома, хомка, меч, sword', 5, 1322,
            7, 306, 'Acumen', 'Conversion', 'Magic Paralyze', 'Увеличивает Скорость Каста на 15%', 'Увеличивает MP на 60% и уменьшает HP на 40%', 'Даёт 5% шанс наложить Паралич, используя вредоносное умение' );
        seederAddRecipe( 'Sword of Limit', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Guidance', 'Critical Drain', 'Health', 'Увеличивает Точность на 5', 'Поглощает 9 НР цели при критической атаке', 'Увеличивает HP на 25%' );
        seederAddRecipe( 'Sword of Nightmare', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Health', 'Focus', 'Light', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 77', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Sword of Whispering Death', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Empower', 'M. Atk', 'Magic Silence', 'Увеличивает Маг. Атк. на 24', 'При использовании магии увеличивает расход MP на 15% и Увеличивает Маг. Атк. на 99 для магических умений', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Pa\'agrian Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Focus', 'Health', 'Critical Drain', 'Увеличивает Физ. Крит. Атк. на 77', 'Увеличивает HP на 25%', 'Поглощает 9 HP при критической атаки' );
        seederAddRecipe( 'Samurai Long Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'самурай, слс, меч, sword', 6, 1885,
            8, 555, 'Focus', 'Critical Damage', 'Haste', 'Увеличивает Физ. Крит. Атк. на 73', 'Увеличивает Физ. Атк. на 231 при критической атаке', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Berserker Blade', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'берсеркер, меч, sword', 6, 1885,
            8, 555, 'Focus', 'Critical Damage', 'Haste', 'Увеличивает Физ. Крит. Атк. на 73', 'Увеличивает Физ. Атк. на 270 при критической атаке', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Ecliptic Sword', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'меч, sword', 6, 1885,
            8, 555, 'Empower', 'M. Atk.', 'Magic Silence', 'Увеличивает Маг. Атк. на 26', 'При использовании магических умений увеличивает потребление МП на 15% и Маг. Атк. на 112', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Great Sword', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Большой Меч, меч, sword', 6, 891,
            9, 222, 'Health', 'Critical Damage', 'Focus', 'Увеличивает HP на 25%', 'Atk. на 247 при критической атаке', 'Увеличивает Физ. Крит. Атк. на 68' );
        seederAddRecipe( 'Great Sword 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Большой Меч, меч, sword', 6, 891,
            9, 222, 'Health', 'Critical Damage', 'Focus', 'Увеличивает HP на 25%', 'Atk. на 247 при критической атаке', 'Увеличивает Физ. Крит. Атк. на 68' );
        seederAddRecipe( 'Keshanberk', $imagePath, 0, 'B', $categoryId, 0, '60', 'Добавляет 17.42 Физ. Атк.', 'Destruction', 1, false, 'Кешанберк, кешенберк, Кашенберк, кашенберг, kashenberk, меч, sword', 6, 891,
            9, 222, 'Guidance', 'Focus', 'Back Blow', 'Увеличивает Точность на 5', 'Увеличивает Физ. Крит. Атк. на 68', 'Физ. Крит. Атк. на 56 при атаке сзади' );
        seederAddRecipe( 'Keshanberk 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Добавляет 17.42 Физ. Атк.', 'Destruction', 1, false, 'Кешанберк, кешенберк, Кашенберк, кашенберг, kashenberk, меч, sword', 6, 891,
            9, 222, 'Guidance', 'Focus', 'Back Blow', 'Увеличивает Точность на 5', 'Увеличивает Физ. Крит. Атк. на 68', 'Физ. Крит. Атк. на 56 при атаке сзади' );
        seederAddRecipe( 'Sword of Valhalla', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 187', 'Nature', 1, false, 'Меч Вальхаллы, Валя, Валька, меч, sword', 6, 891,
            9, 222, 'Acumen', 'Magic Weakness', 'Magic Regeneration', 'Увеличивает Скорость Каста на 15%', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель', '30% шанс наложения Regeneration (lvl 3) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Sword of Valhalla 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 187', 'Nature', 1, false, 'Меч Вальхаллы, Валя, Валька, меч, sword', 6, 891,
            9, 222, 'Acumen', 'Magic Weakness', 'Magic Regeneration', 'Увеличивает Скорость Каста на 15%', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель', '30% шанс наложения Regeneration (lvl 3) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Damascus Sword', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Дамаскус, меч, sword', null, 1346,
            10, 339, 'Focus', 'Critical Damage', 'Haste', 'Увеличивает Физ. Крит. Атк. на 64', 'Увеличивает Физ. Атк. на 262 при критической атаке', 'Увеличивает Скорость атаки на 6%' );
        seederAddRecipe( 'Damascus Sword 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Дамаскус, меч, sword', null, 1346,
            10, 339, 'Focus', 'Critical Damage', 'Haste', 'Увеличивает Физ. Крит. Атк. на 64', 'Увеличивает Физ. Атк. на 262 при критической атаке', 'Увеличивает Скорость атаки на 6%' );
        seederAddRecipe( 'Guardian\'s Sword', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Меч Стража, Гвардиан, меч, sword', null, 1346,
            10, 339, 'Critical Drain', 'Health', 'Critical Bleed', 'Поглощает 8 HP  при критической атаке', 'Увеличивает HP на 25%', 'Вызывает кровотечение цели с вероятностью 24% при критической атаке' );
        seederAddRecipe( 'Guardian\'s Sword 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Меч Стража, Гвардиан, меч, sword', null, 1346,
            10, 339, 'Critical Drain', 'Health', 'Critical Bleed', 'Поглощает 8 HP  при критической атаке', 'Увеличивает HP на 25%', 'Вызывает кровотечение цели с вероятностью 24% при критической атаке' );
        seederAddRecipe( 'Wizard\'s Tear', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Слезы Чародея, визард, визарт, меч, sword', null, 1346,
            10, 339, 'Acumen', 'M. Atk.', 'Conversion', 'Увеличивает Скорость Каста на 15%', 'При использовании магических умений увеличивает потребление МП на 15% и Маг. Атк. на 139', 'Увеличивает MP на 60% и уменьшает HP на 40%' );
        seederAddRecipe( 'Wizard\'s Tear 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Слезы Чародея, визард, визарт, меч, sword', null, 1346,
            10, 339, 'Acumen', 'M. Atk.', 'Conversion', 'Увеличивает Скорость Каста на 15%', 'При использовании магических умений увеличивает потребление МП на 15% и Маг. Атк. на 139', 'Увеличивает MP на 60% и уменьшает HP на 40%' );
        seederAddRecipe( 'Tallum Blade', $imagePath, 0, 'A', $categoryId, 0, '60', 'Добавляет 22.1 Физ. Атк.', 'Destruction', 1, false, 'Клинок Таллума, меч, sword', 7, 1128,
            11, 147, 'Critical Poison', 'Haste', 'Anger', 'Даёт 10% шанс отправить при критической атаки', 'Увеличивает Скорость атаки на 6%', 'Уменьшает HP на 15% и Увеличивает Физ. Атк. на 31' );
        seederAddRecipe( 'Elemental Sword', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Меч Стихий, елементал, элементал, меч, sword', 7, 1128,
            11, 147, 'M. Atk.', 'Magic Paralyze', 'Empower', 'При использовании магических умений увеличивает потребление МП на 15% и Маг. Атк. на 153', 'Даёт 5% шанс наложить Паралич, используя вредоносное умение', 'Увеличивает Маг. Атк. на 30' );
        seederAddRecipe( 'Infernal Master', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.9', 'Concentration', 1, false, 'Мастер Инферно, inferno, меч, sword', 7, 1128,
            11, 157, 'Haste', 'Critical Damage', 'Focus', 'Увеличивает Скорость атаки на 6%', 'Увеличивает Физ. Крит. Атк. при критической атаке на 297', 'Увеличивает Физ. Крит. Атк. на 61' );
        seederAddRecipe( 'Dragon Slayer', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Вампиризм на 3', 'Evil Spirit', 1, false, 'Убийца Драконов, драгон, слеер, меч, sword', null, 1659,
            12, 140, 'Health', 'Critical Bleed', 'Critical Drain', 'Увеличивает HP на 25%', 'Даёт 24% шанс наложения вызвать кровотечение при критической атаки', 'При критической атаке, Поглощает 11 HP' );
        seederAddRecipe( 'Sword of Miracles', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Силу Хила на 37', 'Holy Spirit', 1, false, 'Легендарный Меч, сом, som, миракл, меч, sword', null, 1659,
            12, 140, 'M. Atk.', 'Magic Silence', 'Acumen', 'При использовании магических умений увеличивает потребление МП на 15% и Увеличивает Маг. Атк. на 167', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Dark Legion\'s Edge', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 220', 'Thunder', 1, false, 'Темный Легион, меч, sword', null, 1659,
            12, 157, 'Critical Damage', 'Health', 'Rsk. Focus', 'При критической атаке, Увеличивает Физ. Атк. на 326', 'Увеличивает HP на 25%', 'При HP равном 60% или ниже, увеличивает Фик. Крит. Атк. на 130' );
        seederAddRecipe( 'Sirra\'s Blade', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Клинок Сирры, сиры, сира, сирра, меч, sword', null, 2157,
            12, 157, 'Haste', 'Health', 'Critical Poison', 'Увеличивает Скорость атаки на 6%', 'Увеличивает HP на 25%', 'Вероятность отравить цель 15% при критической атаке' );
        seederAddRecipe( 'Sword of Ipos', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает HP на 398', 'Earth', 1, false, 'Меч Ипоса, меч, sword', null, 2157,
            12, 157, 'Focus', 'Haste', 'Health', 'Увеличивает Физ. Крит. Атк. на 61', 'Увеличивает Скорость атаки на 6%', 'Увеличивает HP на 25%' );
        seederAddRecipe( 'Themis\' Tongue', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Язык Темиса, меч, sword', null, 2157,
            12, 157, 'Mana Up', 'Mental Shield', 'Magic Focus', 'Увеличивает MP на 30%', 'Даёт 50% шанс наложения Mental Shield (lvl 4) при использовании благотворного умения на цель', 'Даёт 20% шанс наложения Focus (lvl 3) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Forgotten Blade', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Забытый Клинок, fg, фг, меч, sword', null, 2052,
            13, 82, 'Haste', 'Health', 'Focus', 'Увеличивает Скорость атаки на 7%', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 84' );
        seederAddRecipe( 'Heavens Divider', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 340', 'Thunder', 1, false, 'Разделитель Небес, хд. hd, меч, sword', null, 2052,
            13, 82, 'Haste', 'Health', 'Focus', 'Увеличивает Скорость атаки на 7%', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 84' );
        seederAddRecipe( 'Dynasty Sword', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Меч Династии, дино, меч, sword', null, 3597,
            14, 285, 'Focus', 'Health', 'Light', 'Увеличивает Физ. Крит. Атк. на 111', 'Увеличивает HP на 25%', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Dynasty Blade', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Клинок Династии, дино, меч, sword', null, 3597,
            14, 285, 'Focus', 'Health', 'Light', 'Увеличивает Физ. Крит. Атк. на 111', 'Увеличивает HP на 25%', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Dynasty Phantom', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает MP на 334', 'Nature', 1, false, 'Фантом Династии, дино, меч, sword', null, 3597,
            14, 285, 'Acumen', 'Mana Up', 'Conversion', 'Увеличивает Скорость Каста на 15%', 'Увеличивает MP на 30%', 'Увеличивает MP на 60% и уменьшает HP на 40%' );
        seederAddRecipe( 'Icarus Sawsword', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 42.12', 'Destruction', 1, false, 'Зазубренный Меч Икара, ик, меч, sword', null, 4965,
            15, 399, 'Focus', 'Health', 'Light', 'Увеличивает Физ. Крит. Атк. на 111', 'Увеличивает HP на 25%', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Icarus Spirit', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает HP на 334', 'Nature', 1, false, 'Дух Икара, спирит, ик, меч, sword', null, 4965,
            15, 399, 'Acumen', 'Mana Up', 'Conversion', 'Увеличивает Скорость Каста на 15%', 'Увеличивает MP на 30%', 'Увеличивает MP на 60% и уменьшает HP на 40%' );
        seederAddRecipe( 'Icarus Heavy Arms', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Тяжелые Руки Икара, ик, меч, sword', null, 4965,
            15, 399, 'Focus', 'Health', 'Light', 'Увеличивает Физ. Крит. Атк. на 111', 'Увеличивает HP на 25%', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Vesper Cutter', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Thunder', 1, false, 'Резак Венеры, кутер, веспер, меч, sword', null, 7050,
            16, 623, 'Health', 'Focus', 'Haste', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 131', 'Увеличивает Скорость атаки на 11%' );
        seederAddRecipe( 'Vesper Slasher', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Эспадон Венеры, слешер, веспер, меч, sword', null, 7050,
            16, 623, 'Focus', 'Haste', 'Health', 'Увеличивает Физ. Крит. Атк. на 131', 'Увеличивает Скорость Атаки на 11%', 'Увеличивает HP на 25%' );
        seederAddRecipe( 'Vesper Buster', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Clevernes', 1, false, 'Расчленитель Венеры, бустер, веспер, меч, sword', null, 7050,
            16, 623, 'Magic Hold', 'Mana Up', 'Acumen', 'Дает шанс 20% наложить Dryad Root при использовании вредоносного умения на цель', 'Увеличивает MP на 30%', 'Увеличивает Скорость Каста на 15%' );
    }

    protected function addBlunts() {
        $categoryId = $this->bluntCategory->id;
        $imagePath  = 'item/weapon/blunt';

        seederAddRecipe( 'Big Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Health', 'Rsk. Focus', 'Haste', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 138 при HP 60% и ниже', 'Увеличивает Скорость атаки на 8%' );
        seederAddRecipe( 'Battle Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Anger', 'Rsk. Focus', 'Haste', 'Увеличивает Физ. Атк. на 20 уменьшает HP на 15%', 'Увеличивает Физ. Крит. Атк. на 138 при HP 60% и ниже', 'Увеличивает Скорость атаки на 8%' );
        seederAddRecipe( 'Silver Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Anger', 'Rsk. Focus', 'Haste', 'Увеличивает Физ. Атк. на 20 уменьшает HP на 15%', 'Увеличивает Физ. Крит. Атк. на 138 при HP 60% и ниже', 'Увеличивает Скорость атаки на 8%' );
        seederAddRecipe( 'Skull Graver', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Anger', 'Health', 'Rsk. Focus', 'Увеличивает Физ. Атк. на 20 уменьшает HP на 15%', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 138 при HP 60% и ниже' );
        seederAddRecipe( 'Heavy Doom Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Regeneration', 'Mental Shield', 'Hold', 'Даёт 30% шанс наложения Regeneration (lvl 1) при использовании благотворного умения на цель', 'Даёт 50% шанс наложения Mental Shield (lvl 2) при использовании благотворного умения на цель', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Crystal Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Rsk. Evasion', 'Mana Up', 'Blessed Body', 'Увеличивает Уклонение на 7 при HP 60% и ниже', 'Увеличивает MP на 30%', 'Даёт 20% шанс наложить Blessed Body (lvl 2) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Stick of Faith', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Mana Up', 'Magic Hold', 'Mental Shield', 'Увеличивает MP на 30%', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель', 'Даёт 50% шанс наложения Mental Shield (lvl 2) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Heavy Doom Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Magic Poison', 'Magic Weakness', 'Magic Chaos', 'Даёт 8% шанс наложить Poison при использовании вредоносного умения на цель', 'Даёт 8% шанс колдовства Weakness при использовании вредоносного умения на цель', 'Даёт 8% шанс наложить Curse Chaos при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Cursed Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Magic Hold', 'Magic Poison', 'Magic Weakness', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель', 'Даёт 8% шанс наложить Poison при использовании вредоносного умения на цель', 'Даёт 8% шанс колдовства Weakness при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Dwarven War Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Anger', 'Health', 'Haste', 'Увеличивает Физ. Атк. на 22 уменьшает HP на 15%', 'Увеличивает HP на 25%', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'War Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'Вар акс', 5, 1322,
            7, 306, 'Anger', 'Health', 'Haste', 'Увеличивает Физ. Атк. на 24 уменьшает HP на 15%', 'Увеличивает HP на 25%', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Nirvana Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Magic Poison', 'M. Atk.', 'Magic Weakness', 'Даёт 7% шанс наложить Poison при использовании вредоносного умения на цель', 'При использовании магических умений увеличивает потребление МП на 15% и Маг. Атк. на 99', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Stick of Eternity', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Empower', 'Rsk. Evasion', 'Blessed Body', 'Увеличивает Маг. Атк. на 24', 'Увеличивает Уклонение на 7 при HP 60% и ниже', 'Даёт 20% шанс наложить Blessed Body (lvl 3) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Paradia Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Regeneration', 'Mental Shield', 'Hold', 'Даёт 30% шанс наложения Regeneration (lvl 2) при использовании благотворного умения на цель', 'Даёт 50% шанс наложения Mental Shield (lvl 3) при использовании благотворного умения на цель', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Inferno Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'инферно', 5, 1322,
            7, 306, 'Magic Silence', 'Acumen', 'Magic Paralyze', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель', 'Увеличивает Скорость Каста на 15%', 'Даёт 5% шанс наложить Паралич, используя вредоносное умение' );
        seederAddRecipe( 'Pa\'agrio Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Rsk. Evasion', 'Magic Poison', 'Magic Weakness', 'Увеличивает Уклонение на 6 при HP 60% и ниже', 'Даёт 7% шанс наложить Poison при использовании вредоносного умения на цель', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Sage\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 5, 1322,
            7, 306, 'Magic Hold', 'Magic Poison', 'Magic Weakness', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель', 'Даёт 7% шанс наложить Poison при использовании вредоносного умения на цель', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Club of Nature', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Magic Hold', 'Mental Shield', 'Acumen', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель', 'Даёт 50% шанс наложения Mental Shield (lvl 3) при использовании благотворного умения на цель', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Mace of Underworld', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Mana Up', 'Magic Silence', 'Conversion', 'Увеличивает MP на 30%', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель', 'Увеличивает MP на 60% и уменьшает HP на 40%' );
        seederAddRecipe( 'Karik Horn', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Critical Drain', 'Haste', 'Focus', 'Поглощает 9 HP при критической атаки', 'Увеличивает Скорость атаки на 7%', 'Увеличивает Физ. Крит. Атк. на 77' );
        seederAddRecipe( 'Pa\'agrio Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1471,
            7, 225, 'Mana Up', 'Magic Weakness', 'Magic Chaos', 'Увеличивает MP на 30%', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель', 'Даёт 7% шанс наложить Curse Chaos при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Deadman\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 1885,
            8, 555, 'Regeneration', 'Mental Shield', 'Hold', 'Даёт 30% шанс наложения Regeneration (lvl 2) при использовании благотворного умения на цель', 'Даёт 50% шанс наложения Mental Shield (lvl 3) при использовании благотворного умения на цель', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Ghoul\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 1885,
            8, 555, 'Rsk. Evasion', 'Mana Up', 'Blessed Body', 'Увеличивает Уклонение на 6 при HP меньше 60%', 'Увеличивает MP на 30%', 'Даёт 20% шанс наложить Blessed Body (lvl 4) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Demon\'s Staff', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6, 1885,
            8, 555, 'Magic Poison', 'Magic Weakness', 'Magic Chaos', 'Даёт 7% шанс наложить Poison при использовании вредоносного умения на цель', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель', 'Даёт 7% шанс наложить Curse Chaos при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Yaksa Mace', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'якса', 6, 1885,
            8, 555, 'Anger', 'Health', 'Rsk. Focus', 'Увеличивает Физ. Атк. на 26 уменьшает HP на 15%', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 115 при HP 60% и ниже' );
        seederAddRecipe( 'Ecliptic Axe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6, 1885,
            8, 555, 'Conversion', 'M. Atk.', 'Magic Hold', 'Увеличивает MP на 60% и уменьшает HP на 40%', 'При использовании магических умений увеличивает потребление МП на 15%, и Маг. Атк. на 112', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Dwarven Hammer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, '', 6, 1885,
            8, 555, 'Health', 'Anger', 'Critical Bleed', 'Увеличивает HP на 25%', 'Уменьшает HP на 15% и Увеличивает Физ. Атк. на 26', 'Вызывает кровотечение цели с вероятностью 42% при критической атаке' );
        seederAddRecipe( 'Heavy War Axe', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Тяжелый Топор Войны, вар акс', 6, 891,
            9, 222, 'Anger', 'Health', 'Rsk. Focus', 'Увеличивает Физ. Атк. на 28 уменьшает HP на 15%', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 107 при HP 60% и ниже' );
        seederAddRecipe( 'Heavy War Axe 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Тяжелый Топор Войны, вар акс', 6, 891,
            9, 222, 'Anger', 'Health', 'Rsk. Focus', 'Увеличивает Физ. Атк. на 28 уменьшает HP на 15%', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 107 при HP 60% и ниже' );
        seederAddRecipe( 'Spirit\'s Staff', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Посох Духа, спирит стаф', 6, 891,
            9, 222, 'Regeneration', 'Mental Shield', 'Hold', 'Даёт 30% шанс наложения Regeneration (lvl 3) при использовании благотворного умения на цель', 'Даёт 50% шанс наложения Mental Shield (lvl 4) при использовании благотворного умения на цель', 'Даёт 50% шанс наложения Mental Shield при использовании благотворного умения на цель' );
        seederAddRecipe( 'Spirit\'s Staff 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Посох Духа, спирит стаф', 6, 891,
            9, 222, 'Regeneration', 'Mental Shield', 'Hold', 'Даёт 30% шанс наложения Regeneration (lvl 3) при использовании благотворного умения на цель', 'Даёт 50% шанс наложения Mental Shield (lvl 4) при использовании благотворного умения на цель', 'Даёт 50% шанс наложения Mental Shield при использовании благотворного умения на цель' );
        seederAddRecipe( 'Spell Breaker', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Рассеиватель Заклинания, спел брейкер', 6, 891,
            9, 222, 'Acumen', 'Mental Shield', 'Magic Hold', 'Увеличивает Скорость Каста на 15%', 'Даёт 50% шанс наложения Mental Shield (lvl 4) при использовании благотворного умения на цель', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Spell Breaker 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Атк. на 21.77', 'Hail', 1, false, 'Рассеиватель Заклинания, спел брейкер', 6, 891,
            9, 222, 'Acumen', 'Mental Shield', 'Magic Hold', 'Увеличивает Скорость Каста на 15%', 'Даёт 50% шанс наложения Mental Shield (lvl 4) при использовании благотворного умения на цель', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Ice Storm Hammer', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Ледяной Бури', 6, 891,
            9, 222, 'Focus', 'Anger', 'Critical Bleed', 'Увеличивает Физ. Крит. Атк. на 68', 'Уменьшает HP 15% и Увеличивает Физ. Атк. на 28', 'Вызывает кровотечение цели с вероятностью 41% при критической атаке' );
        seederAddRecipe( 'Ice Storm Hammer 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Ледяной Бури', 6, 891,
            9, 222, 'Focus', 'Anger', 'Critical Bleed', 'Увеличивает Физ. Крит. Атк. на 68', 'Уменьшает HP 15% и Увеличивает Физ. Атк. на 28', 'Вызывает кровотечение цели с вероятностью 41% при критической атаке' );
        seederAddRecipe( 'Deadman\'s Glory', $imagePath, 0, 'B', $categoryId, 0, '60', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Мертвеца', null, 1346,
            10, 339, 'Anger', 'Health', 'Haste', 'Увеличивает Физ. Атк. на 30 уменьшает HP на 15%', 'Увеличивает HP на 25%', 'Увеличивает Скорость атаки на 6%' );
        seederAddRecipe( 'Deadman\'s Glory 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Мертвеца', null, 1346,
            10, 339, 'Anger', 'Health', 'Haste', 'Увеличивает Физ. Атк. на 30 уменьшает HP на 15%', 'Увеличивает HP на 25%', 'Увеличивает Скорость атаки на 6%' );
        seederAddRecipe( 'Art of Battle Axe', $imagePath, 0, 'B', $categoryId, 0, '60', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Искусства Войны, аоба, aoba', null, 1346,
            10, 339, 'Health', 'Rsk. Focus', 'Haste', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 99 при HP 60% и ниже', 'Увеличивает Скорость атаки на 6%' );
        seederAddRecipe( 'Art of Battle Axe 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'С вероятностью 5% оглушает врага при физической атаке.', 'Landslide', 1, false, 'Топор Искусства Войны, аоба, aoba', null, 1346,
            10, 339, 'Health', 'Rsk. Focus', 'Haste', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 99 при HP 60% и ниже', 'Увеличивает Скорость атаки на 6%' );
        seederAddRecipe( 'Staff of Evil Spirits', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Силу Хила на 33', 'Holy Spirit', 1, false, 'Посох Злых Духов, спирит', null, 1346,
            10, 339, 'Focus', 'Blessed Body', 'Poison', 'Даёт 20% шанс наложения Focus (lvl 3) при использовании благотворного умения на цель', 'Даёт 20% шанс наложить Blessed Body (lvl 5) при использовании благотворного умения на цель', 'Даёт 6% шанс наложить Poison при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Staff of Evil Spirits 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Силу Хила на 33', 'Holy Spirit', 1, false, 'Посох Злых Духов, спирит', null, 1346,
            10, 339, 'Focus', 'Blessed Body', 'Poison', 'Даёт 20% шанс наложения Focus (lvl 3) при использовании благотворного умения на цель', 'Даёт 20% шанс наложить Blessed Body (lvl 5) при использовании благотворного умения на цель', 'Даёт 6% шанс наложить Poison при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Kaim Vanul\'s Bones', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Кости Каим Ванула', null, 1346,
            10, 339, 'Mana Up', 'Magic Silence', 'Conversion', 'Увеличивает MP на 30%', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель', 'Увеличивает MP на 60% и уменьшает HP на 40%' );
        seederAddRecipe( 'Kaim Vanul\'s Bones 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Кости Каим Ванула', null, 1346,
            10, 339, 'Mana Up', 'Magic Silence', 'Conversion', 'Увеличивает MP на 30%', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель', 'Увеличивает MP на 60% и уменьшает HP на 40%' );
        seederAddRecipe( 'Star Buster', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Звезда Боли', null, 1346,
            10, 339, 'Health', 'Haste', 'Rsk. Focus', 'Увеличивает HP на 25%', 'Увеличивает Скорость атаки на 6%', 'Увеличивает Физ. Крит. Атк. на 99 при HP меньше 60%' );
        seederAddRecipe( 'Star Buster 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Звезда Боли', null, 1346,
            10, 339, 'Health', 'Haste', 'Rsk. Focus', 'Увеличивает HP на 25%', 'Увеличивает Скорость атаки на 6%', 'Увеличивает Физ. Крит. Атк. на 99 при HP меньше 60%' );
        seederAddRecipe( 'Dasparion\'s Staff', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 27.63', 'Hail', 1, false, 'Посох Даспариона', 7, 1128,
            11, 147, 'Mana Up', 'Conversion', 'Acumen', 'Увеличивает MP на 30%', 'Увеличивает MP на 60% и уменьшает HP на 40%', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Meteor Shower', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает HP на 345', 'Earth', 1, false, 'Метеоритный Дождь', 7, 1128,
            11, 157, 'Focus', 'Critical Bleed', 'Rsk. Haste', 'Увеличивает Физ. Крит. Атк. на 61', 'Даёт 42% шанс наложения вызвать кровотечение при критической атаки', 'Увеличивает Скорость атаки на 11% при HP 60% и ниже' );
        seederAddRecipe( 'Spiritual Eye', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 27.63', 'Hail', 1, false, 'Глаз Духа', 7, 1128,
            11, 147, 'Mana Up', 'Magic Poison', 'Acumen', 'Увеличивает MP на 30%', 'Даёт 8% шанс наложить Poison при использовании вредоносного умения на цель', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Destroyer Hammer', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 52.2', 'Lightning', 1, false, 'Молот Разрушителя, дестроер', 7, 1128,
            11, 157, 'Health', 'Haste', 'Critical Drain', 'Увеличивает HP на 25%', 'Увеличивает Скорость Атаки на 6%', 'Поглощает 18 HP  при критической атаке' );
        seederAddRecipe( 'Elysian', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Элизиум', null, 1659,
            12, 140, 'Health', 'Anger', 'Critical Drain', 'Увеличивает HP на 25%', 'Уменьшает HP на 15% и Увеличивает Физ. Атк. на 32', 'При критической атаке, Поглощает 19 HP' );
        seederAddRecipe( 'Branch of the Mother Tree', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает HP на 239', 'Nature', 1, false, 'Ветвь Древа Жизни, бранч', null, 1659,
            12, 140, 'Conversion', 'Magic Damage', 'Acumen', 'Увеличивает MP на 60% и уменьшает HP на 40%', 'Даёт 30% шанс нанесения дополнительного магического урона мощностью 8 при использовании вредоносного умения на цель', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Flaming Dragon Skull', $imagePath, 0, 'A', $categoryId, 0, '60', 'Снижает Потребление MP магических умений на 5%', 'Wisdom', 1, false, 'Пылающий Череп Дракона, драгон скулл', null, 1659,
            12, 140, 'Acumen', 'M. Atk.', 'Magic Silence', 'Увеличивает Скорость Каста на 15%', 'При использовании магии увеличивает расход MP на 15%, Маг. Атк. на 167', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Doom Crusher', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 415', 'Thunder', 1, false, 'Крушитель Рока, дум', null, 1659,
            12, 157, 'Health', 'Anger', 'Rsk. Haste', 'Увеличивает HP на 25%', 'Уменьшает HP на 15% и Увеличивает Физ. Атк. на 11%', 'Увеличивает Скорость атаки на 11% при HP 60% и ниже' );
        seederAddRecipe( 'Barakiel\'s Axe', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Топор Баракиэля', null, 2157,
            12, 157, 'Health', 'Haste', 'Focus', 'Увеличивает HP на 25%', 'Увеличивает Скорость атаки на 6%', 'Увеличивает Физ. Крит. Атк. на 61' );
        seederAddRecipe( 'Behemoth\' Tuning Fork', $imagePath, 0, 'A', $categoryId, 0, '60', 'Добавляет 32.97 Физ. Атк.', 'Destruction', 1, false, 'Трезубец Чудовища, бегемот', null, 2157,
            12, 157, 'Focus', 'Health', 'Anger', 'Увеличивает Физ. Крит. Атк. на 61', 'Увеличивает HP на 25%', 'Уменьшает HP на 15% и Увеличивает Физ. Атк. на 32' );
        seederAddRecipe( 'Cabrio\'s Hand', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Рука Кабрио', null, 2157,
            12, 157, 'Conversion', 'Mana Up', 'Magic Silence', 'Увеличивает MP на 60% и уменьшает HP на 40%', 'Увеличивает MP на 30%', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Daimon Crystal', $imagePath, 0, 'A', $categoryId, 0, '60', 'Снижает Потребление MP на 5%', 'Wisdom', 1, false, 'Кристалл Дэймона', null, 2157,
            12, 157, 'Mana Up', 'Acumen', 'Mental Shield', 'Увеличивает MP на 30%', 'Увеличивает Скорость Каста на 15%', 'Даёт 50% шанс наложения Mental Shield (lvl 4) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Basalt Battlehammer', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 4.2', 'Concentration', 1, false, 'Базальтовый Боевой Молот, басальт', null, 2052,
            13, 82, 'HP Drain', 'Health', 'HP Regeneration', 'Даёт 3% вампиризма', 'Увеличивает HP на 25%', 'Увеличивает восстановление HP' );
        seederAddRecipe( 'Imperial Staff', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает HP на 289', 'Nature', 1, false, 'Имперский Посох, империал стафф', null, 2052,
            13, 82, 'Empower', 'MP Regeneration', 'Magic Hold', 'Увеличивает Маг. Атк. на 60', 'Увеличивает восстановление MP', 'Даёт 20% шанс наложить Dryad Root при использовании вредоносного умения на цель' );
        seederAddRecipe( 'Dragon Hunter Axe', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 415', 'Thunder', 1, false, 'Топор Охотника на Драконов, драгон хантер', null, 2052,
            13, 82, 'HP Regeneration', 'Health', 'HP Drain', 'Увеличивает восстановление HP', 'Увеличивает HP на 25%', 'Даёт 3% вампиризма' );
        seederAddRecipe( 'Arcana Mace', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает HP на 289', 'Nature', 1, false, 'Посох Тайн, аркана', null, 2052,
            13, 82, 'Acumen', 'MP Regeneration', 'Mana Up', 'Увеличивает Скорость Каста на 15%', 'Увеличивает восстановление MP', 'Увеличивает MP на 30%' );
        seederAddRecipe( 'Dynasty Cudgel', $imagePath, 0, 'S', $categoryId, 0, '60', 'С вероятностью 8% оглушает врага при физической атаке)', 'Landslide', 1, false, 'Дубина Династии, дино', null, 3597,
            14, 285, 'Anger', 'Health', 'Rsk. Focus', 'Уменьшает HP на 15% и Увеличивает Физ. Атк. на 78', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 164 при HP 60% и ниже' );
        seederAddRecipe( 'Dynasty Mace', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Булава Династии, мейс, дино', null, 3597,
            14, 285, 'Mana Up', 'Conversion', 'Acumen', 'Увеличивает MP на 30%', 'Увеличивает MP на 60% и уменьшает HP на 40%', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Dynasty Staff', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Силу Хила на 43', 'Holy Spirit', 1, false, 'Посох Династии, стафф, дино', null, 3597,
            14, 285, 'Mana Up', 'Conversion', 'Acumen', 'Увеличивает MP на 30%', 'Увеличивает MP на 60% и уменьшает HP на 40%', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Dynasty Crusher', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Крушитель Династии, дино крашер, крушак', null, 3597,
            14, 285, 'Anger', 'Health', 'Rsk. Focus', 'Уменьшает HP на 15% Увеличивает Физ. Атк. на 78', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 164 при HP 60% и ниже' );
        seederAddRecipe( 'Icarus Hammer', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает HP на 511', 'Earth', 1, false, 'Молот Икара, ик хаммер,', false, 4965,
            15, 399, 'Anger', 'Health', 'Rsk. Focus', 'Уменьшает HP на 15% Увеличивает Физ. Атк. на 78', 'Увеличивает HP на 25%', 'Увеличивает Физ. Крит. Атк. на 164 при HP 60% и ниже' );
        seederAddRecipe( 'Icarus Hall', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 45.81', 'Hail', 1, false, 'Холл Икара, ик', false, 4965,
            15, 399, 'Mana Up', 'Conversion', 'Acumen', 'Увеличивает MP на 30%', 'Увеличивает MP на 60% и уменьшает HP на 40%', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Vesper Avenger', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'С вероятностью 8% оглушает врага при физической атаке', 'Landslide', 1, false, 'Мститель Венеры, веспер', false, 7050,
            16, 623, 'Health', 'HP Regeneration', 'HP Drain', 'Увеличивает HP на 25%', 'Увеличивает восстановление HP', 'Даёт 4% вампиризма' );
        seederAddRecipe( 'Vesper Retributer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Возмездие Венеры, ретрик, веспер', false, 7050,
            16, 623, 'Health', 'HP Drain', 'HP Regeneration', 'Увеличивает HP на 25%', 'Даёт 4% вампиризма', 'Увеличивает восстановление HP' );
        seederAddRecipe( 'Vesper Caster', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает MP реген на 5%', 'Cleverness', 1, false, 'Заклинатель Венеры, кастер, веспер', false, 7050,
            16, 623, 'MP Regeneration', 'Mana Up', 'Acumen', 'Увеличивает восстановление MP', 'Увеличивает MP на 30%', 'Увеличивает Скорость Каста на 15%' );
        seederAddRecipe( 'Vesper Singer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 45.81', 'Hail', 1, false, 'Певец Венеры, сингер, веспер', false, 7050,
            16, 623, 'Empower', 'MP Regeneration', 'Magic Hold', 'Увеличивает Маг. Атк. на 151', 'Увеличивает восстановление MP', 'Дает шанс 20% наложить Root при использовании вредоносного умения на цель' );
    }

    protected function addBows() {
        $categoryId = $this->bowCategory->id;
        $imagePath  = 'item/weapon/bow';

        seederAddRecipe( 'Crystallized Ice Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кристалайз лук', 6, 705,
            5, 97, 'Guidance', 'Evasion', 'Quick Recovery', 'Увеличивает Точность на 5', 'Увеличивает Уклонение на 2', 'Уменьшает время перезарядки на 17%' );
        seederAddRecipe( 'Elemental Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Guidance', 'Miser', 'Quick Recovery', 'Увеличивает Точность на 5', 'Даёт 30% уменьшить расход Soulshots до 7', 'Уменьшает время перезарядки на 20%' );
        seederAddRecipe( 'Noble Elven Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Evasion', 'Miser', 'Cheap Shot', 'Увеличивает Уклонение на 2', 'Даёт 30% уменьшить расход Soulshots до 7', 'Даёт 46% шанс уменьшить расход MP до 2 при обычной атаке' );
        seederAddRecipe( 'Akat Longbow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'акат лук', 5, 1322,
            7, 306, 'Guidance', 'Evasion', 'Miser', 'Увеличивает Точность на 4', 'Увеличивает Уклонение на 2', 'Даёт 30% уменьшить расход Soulshots до 8' );
        seederAddRecipe( 'Eminence Bow', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'емик эмик лук', 6, 1885,
            8, 555, 'Guidance', 'Miser', 'Cheap Shot', 'Увеличивает Точность на 4', 'Даёт 30% уменьшить расход Soulshots до 9', 'Шанс 42% уменьшить расход MP до 1 при обычной атаке' );
        seederAddRecipe( 'Dark Elven Longbow', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Длинный Лук Темных Эльфов', 6, 891,
            9, 222, 'Evasion', 'Critical Bleed', 'Miser', 'Увеличивает Уклонение на 2', 'Вызывает кровотечение цели с вероятностью 41% при критической атаке', 'Даёт 19% уменьшить расход Soulshots до 2' );
        seederAddRecipe( 'Dark Elven Longbow 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Длинный Лук Темных Эльфов', 6, 891,
            9, 222, 'Evasion', 'Critical Bleed', 'Miser', 'Увеличивает Уклонение на 2', 'Вызывает кровотечение цели с вероятностью 41% при критической атаке', 'Даёт 19% уменьшить расход Soulshots до 2' );
        seederAddRecipe( 'Bow of Peril', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Угрозы, боп, bop, перил', null, 1346,
            10, 339, 'Guidance', 'Quick Recovery', 'Cheap Shot', 'Увеличивает Точность на 3', 'Уменьшает время перезарядки на 13%', 'Шанс 42% уменьшить расход MP до 1 при обычной атаке' );
        seederAddRecipe( 'Bow of Peril 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Угрозы, боп, bop, перил', null, 1346,
            10, 339, 'Guidance', 'Quick Recovery', 'Cheap Shot', 'Увеличивает Точность на 3', 'Уменьшает время перезарядки на 13%', 'Шанс 42% уменьшить расход MP до 1 при обычной атаке' );
        seederAddRecipe( 'Carnage Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Кровавый Лук, коряга, корняга, корнаж, каряга, лук', 7, 1128,
            11, 147, 'Light', 'Critical Bleed', 'Mana Up', 'Увеличивает лимит веса на 20%', 'Даёт 35% шанс наложения вызвать кровотечение при критической атаки', 'Увеличивает MP на 30%' );
        seederAddRecipe( 'Soul Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Дальность Стрельбы на 100', 'Clairvoyance', 1, false, 'Пронзатель Душ, сб, sb, лук', null, 1659,
            12, 140, 'Cheap Shot', 'Quick Recovery', 'Critical Poison', 'Шанс 42% уменьшить расход MP до 1 при обычной атаке', 'Уменьшает время перезарядки на 15%', 'Даёт 18% шанс отправить при критической атаки' );
        seederAddRecipe( 'Shyeed\'s Bow', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Лук Шиид,', null, 2157,
            12, 157, 'Cheap Shot', 'Focus', 'Quick Recovery', 'Шанс 30% уменьшить расход MP до 1 при обычной атаке', 'Увеличивает Физ. Крит. Атк. на 61', 'Уменьшает время перезарядки на 17%' );
        seederAddRecipe( 'Draconic Bow', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает HP на 444', 'Earth', 1, false, 'Лук Дракона, драконик лук', null, 2052,
            13, 82, 'Cheap Shot', 'Focus', 'Critical Slow', 'Шанс 26% уменьшить расход MP до 1 при обычной атаке', 'Увеличивает Физ. Крит. Атк. на 88', 'Даёт 16% шанс наложения Slow при крит. атаке' );
        seederAddRecipe( 'Dynasty Bow', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Лук Династии, дино', null, 3597,
            14, 285, 'Cheap Shot', 'Guidance', 'Focus', 'Дает 26% шанс понизить расход MP до 1 при обычной атаке', 'Увеличивает Точность на 5.32', 'Увеличивает Физ. Крит. Атк. на 116' );
        seederAddRecipe( 'Icarus Spitter', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Лук Икара, ик спитер', null, 4965,
            15, 399, 'Cheap Shot', 'Guidance', 'Focus', 'При обычной атаке дает 26% шанс, что расход MP будет понижен до 1', 'Увеличивает Точность на 5.32', 'Увеличивает Физ. Крит. Атк. на 116' );
        seederAddRecipe( 'Vesper Thrower', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Дальность Стрельбы на 100', 'Clairvoyance', 1, false, 'Бросок Венеры, веспер лук', null, 7050,
            16, 623, 'Cheap Shot', 'Critical Slow', 'Focus', 'При обычной атаке расход MP уменьшается до 1 с вероятностью 61%', 'Даёт 33% шанс наложения Slow при критической атаке', 'Увеличивает Физ. Крит. Атк. на 133' );
    }

    protected function addDaggers() {
        $categoryId = $this->daggerCategory->id;
        $imagePath  = 'item/weapon/dagger';

        seederAddRecipe( 'Cursed Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Critical Bleed', 'Critical Poison', 'Rsk. Haste', 'Вызывает кровотечение цели с вероятностью 17% при критической атаке', 'Вероятность отравить цель 9% при критической атаке', 'Увеличивает Скорость атаки на 13% при HP 60% и ниже' );
        seederAddRecipe( 'Dark Elven Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 4, 705,
            5, 97, 'Focus', 'Back Blow', 'Rsk. Haste', 'Увеличивает Физ. Крит. Атк. на 90', 'Увеличивает Физ. Крит. Атк. на 109 при атаке сзади', 'Увеличивает Скорость атаки на 13% при HP 60% и ниже' );
        seederAddRecipe( 'Stiletto', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Critical Bleed', 'Critical Poison', 'Rsk. Haste', 'Вызывает кровотечение цели с вероятностью 17% при критической атаке', 'Вероятность отравить цель 9% при критической атаке', 'Увеличивает Скорость атаки на 12% при HP 60% и ниже' );
        seederAddRecipe( 'Soulfire Dirk', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Magic Hold', 'Magic Silence', 'Mana Up', 'Даёт 10% шанс наложить Dryad Root при использовании вредоносного умения на цель', 'Даёт 10% шанс наложить Безмолвие при использовании вредоносного умения на цель', 'Увеличивает MP на 30%' );
        seederAddRecipe( 'Grace Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дагер, даггер, dagger, dager', 5, 1322,
            7, 306, 'Evasion', 'Focus', 'Back Blow', 'Увеличивает Уклонение на 2', 'Увеличивает Физ. Крит. Атк. на 81', 'Увеличивает Физ. Крит. Атк. на 97 при атаке сзади' );
        seederAddRecipe( 'Dark Screamer', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'дс ds дарк скример дагер, даггер, dagger, dager', 5, 1322,
            7, 306, 'Evasion', 'Focus', 'Critical Bleed', 'Увеличивает Уклонение на 2', 'Увеличивает Физ. Крит. Атк. на 81', 'Вызывает кровотечение цели с вероятностью 14% при критической атаке' );
        seederAddRecipe( 'Crystal Dagger', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кристал дагер, даггер, dagger, dager', 6, 1885,
            8, 555, 'Critical Bleed', 'Critical Poison', 'Critical Damage', 'Вызывает кровотечение цели с вероятностью 14% при критической атаке', 'Вероятность отравить цель 7% при критической атаке', 'Увеличивает Физ. Атк. на 140 при критической атаке' );
        seederAddRecipe( 'Kris', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Крис дагер, даггер, dagger, dager', 6, 891,
            9, 222, 'Evasion', 'Focus', 'Back Blow', 'Увеличивает Уклонение на 2', 'Увеличивает Физ. Крит. Атк. на 71', 'Увеличивает Физ. Крит. Атк. на 86 при атаке сзади' );
        seederAddRecipe( 'Kris 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Крис дагер, даггер, dagger, dager', 6, 891,
            9, 222, 'Evasion', 'Focus', 'Back Blow', 'Увеличивает Уклонение на 2', 'Увеличивает Физ. Крит. Атк. на 71', 'Увеличивает Физ. Крит. Атк. на 86 при атаке сзади' );
        seederAddRecipe( 'Hell Knife', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Нож Ада, Twilight Knife дагер, даггер, dagger, dager', 6, 891,
            9, 222, 'Mental Shield', 'Magic Weakness', 'Magic Regeneration', 'Даёт 50% шанс наложения Mental Shield (lvl 4) при использовании благотворного умения на цель', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель', 'Даёт 30% шанс наложения Regeneration (lvl 3) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Hell Knife 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Нож Ада, Twilight Knife дагер, даггер, dagger, dager', 6, 891,
            9, 222, 'Mental Shield', 'Magic Weakness', 'Magic Regeneration', 'Даёт 50% шанс наложения Mental Shield (lvl 4) при использовании благотворного умения на цель', 'Даёт 7% шанс колдовства Weakness при использовании вредоносного умения на цель', 'Даёт 30% шанс наложения Regeneration (lvl 3) при использовании благотворного умения на цель' );
        seederAddRecipe( 'Demon\'s Dagger', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Кинжал Демона, демон дагер, даггер, dagger, dager', null, 1346,
            10, 339, 'Critical Bleed', 'Critical Poison', 'Critical Damage', 'Вызывает кровотечение цели с вероятностью 12% при критической атаке', 'Вероятность отравить цель 6% при критической атаке', 'Увеличивает Физ. Атк. на 160 при критической атаке' );
        seederAddRecipe( 'Demon\'s Dagger 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Кинжал Демона, демон дагер, даггер, dagger, dager', null, 1346,
            10, 339, 'Critical Bleed', 'Critical Poison', 'Critical Damage', 'Вызывает кровотечение цели с вероятностью 12% при критической атаке', 'Вероятность отравить цель 6% при критической атаке', 'Увеличивает Физ. Атк. на 160 при критической атаке' );
        seederAddRecipe( 'Bloody Orchid', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Кровавая Орхидея, блудик, орчид дагер, даггер, dagger, dager', 7, 1128,
            11, 157, 'Focus', 'Back Blow', 'Critical Bleed', 'Увеличивает Физ. Крит. Атк. на 67', 'Увеличивает Физ. Крит. Атк. на 37% атакуя сзади', 'Даёт 12% шанс наложения вызвать кровотечение при критической атаки' );
        seederAddRecipe( 'Soul Separator', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Душегуб, сепоратор дагер, даггер, dagger, dager', null, 1659,
            12, 157, 'Guidance', 'Critical Damage', 'Rsk. Haste', 'Увеличивает Точность на 4', 'При критической атаке, Увеличивает Физ. Атк. на 200', 'Увеличивает Скорость атаки на 11% при HP 60% и ниже' );
        seederAddRecipe( 'Naga Storm', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 5% отравляет врага при физической атаки', 'Molar', 1, false, 'Буря Наги, нага дагер, даггер, dagger, dager', null, 2157,
            12, 157, 'Focus', 'Critical Damage', 'Back Blow', 'Увеличивает Физ. Крит. Атк. на 67', 'Увеличивает Физ. Атк. на 200 при критической атаке', 'Увеличивает Физ. Крит. Атк. на 37 атакуя сзади' );
        seederAddRecipe( 'Angel Slayer', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 3.3', 'Concentration', 1, false, 'Убийца Ангелов, as, ангел дагер, даггер, dagger, dager', null, 2052,
            13, 82, 'Critical Damage', 'HP Drain', 'Haste', 'Увеличивает Физ. Атк. на 265 при критической атаке', 'Даёт 3% вампиризма', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Dynasty Knife', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Нож Династии, дино дагер, даггер, dagger, dager', null, 3597,
            14, 285, 'Focus', 'Evasion', 'Critical Damage', 'Увеличивает Физ. Крит. Атк. на 116', 'Увеличивает Уклонение на 5', 'Увеличивает Физ. Атк. на 559 при критической атаке' );
        seederAddRecipe( 'Icarus Disperser', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Уклонение на 3.3', 'Confusion', 1, false, 'Распылитель Икара, ик нож дагер, даггер, dagger, dager', null, 4965,
            15, 399, 'Focus', 'Evasion', 'Crit. Damage', 'Увеличивает Физ. Крит. Атк. на 116', 'Увеличивает Уклонение на 5', 'Увеличивает Физ. Атк. на 559 при критической атаке' );
        seederAddRecipe( 'Vesper Shaper', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Острие Венеры, шапер, веспер нож дагер, даггер, dagger, dager', null, 7050,
            16, 623, 'HP Drain', 'Haste', 'Critical Damage', 'Даёт 4% вампиризма', 'Увеличивает Скорость Атаки на 11%', 'Увеличивает Физ. Атк. на 906 При критической атаке' );
    }

    protected function addPolearms() {
        $categoryId = $this->polearmCategory->id;
        $imagePath  = 'item/weapon/polearm';

        seederAddRecipe( 'Scythe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Anger', 'Critical Stun', 'Light', 'Увеличивает Физ. Атк. на 20 уменьшает HP на 15%', 'Даёт 18% шанс застанить При критической атаке', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Orcish Glaive', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Anger', 'Critical Stun', 'Towering Blow', 'Увеличивает Физ. Атк. на 20 уменьшает HP на 15%', 'Даёт 18% шанс застанить При критической атаке', 'Увеличивает Дальность Атаки' );
        seederAddRecipe( 'Body Slasher', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Critical Stun', 'Towering Blow', 'Wide Blow', 'Даёт 18% шанс застанить При критической атаке', 'Увеличивает Дальность Атаки', 'Увеличивает Угол Атаки' );
        seederAddRecipe( 'Bec de Corbin', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Critical Stun', 'Towering Blow', 'Light', 'Даёт 17% шанс застанить при критической атаке', 'Увеличивает Дальность Атаки', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Poleaxe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Wide Blow', 'Towering Blow', 'Critical Stun', 'Увеличивает Угол Атаки', 'Увеличивает Дальность Атаки', 'При критической атаке вероятность застанить 25%' );
        seederAddRecipe( 'Scorpion', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1471,
            7, 225, 'Anger', 'Critical Stun', 'Wide Blow', 'Увеличивает Физ. Атк. на 24 уменьшает HP на 15%', 'Даёт 16% шанс застанить При критической атаке', 'Увеличивает Дальность Атаки' );
        seederAddRecipe( 'Widow Maker', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1471,
            7, 225, 'Critical Stun', 'Towering Blow', 'Wide Blow', 'Даёт 16% шанс застанить При критической атаке', 'Увеличивает Дальность Атаки', 'Увеличивает Угол Атаки' );
        seederAddRecipe( 'Orcish Poleaxe', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'оркиш пика, алебарда, древковое', 6, 1885,
            8, 555, 'Critical Stun', 'Towering Blow', 'Wide Blow', 'Даёт 15% шанс застанить При критической атаке', 'Увеличивает Дальность Атаки', 'Увеличивает Угол Атаки' );
        seederAddRecipe( 'Great Axe', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 156', 'Thunder', 1, false, 'Двуручный Топор, пика, алебарда, древковое', 6, 891,
            9, 222, 'Anger', 'Critical Stun', 'Light', 'Увеличивает Физ. Атк. на 28 уменьшает HP на 15%', 'Даёт 14% шанс застанить При критической атаке', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Great Axe 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает мощь критической атаки на 156', 'Thunder', 1, false, 'Двуручный Топор, пика, алебарда, древковое', null, 891,
            9, 222, 'Anger', 'Critical Stun', 'Light', 'Увеличивает Физ. Атк. на 28 уменьшает HP на 15%', 'Даёт 14% шанс застанить При критической атаке', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Lance', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 319', 'Earth', 1, false, 'Пика, ланс, пика, алебарда, древковое', null, 1346,
            10, 339, 'Anger', 'Critical Stun', 'Towering Blow', 'Увеличивает Физ. Атк. на 30 уменьшает HP на 15%', 'Даёт 13% шанс застанить При критической атаке', 'Увеличивает Дальность Атаки' );
        seederAddRecipe( 'Lance 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 319', 'Earth', 1, false, 'Пика, ланс, пика, алебарда, древковое', null, 1346,
            10, 339, 'Anger', 'Critical Stun', 'Towering Blow', 'Увеличивает Физ. Атк. на 30 уменьшает HP на 15%', 'Даёт 13% шанс застанить При критической атаке', 'Увеличивает Дальность Атаки' );
        seederAddRecipe( 'Halberd', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Lightning', 1, false, 'Алебарда, халберд, пика, алебарда, древковое', 7, 1128,
            11, 157, 'Haste', 'Critical Stun', 'Wide Blow', 'Увеличивает Скорость атаки на 6%', 'Даёт 25% шанс застанить При критической атаке', 'Увеличивает Угол Атаки' );
        seederAddRecipe( 'Tallum Glaive', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает реген HP на 5%', 'On Fire', 1, false, 'Глефа Таллума, глейв, пика, алебарда, древковое', null, 1659,
            12, 157, 'Guidance', 'Health', 'Wide Blow', 'Увеличивает Точность на 4', 'Увеличивает HP на 25%', 'Увеличивает Угол Атаки' );
        seederAddRecipe( 'Tiphon\'s Spear', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Копье Тифона, пика, алебарда, древковое', null, 2157,
            12, 157, 'Critical Stun', 'Towering Blow', 'Wide Blow', 'Даёт 25% шанс застанить При критической атаке', 'Увеличивает Дальность Атаки', 'Увеличивает Угол Атаки' );
        seederAddRecipe( 'Saint Spear', $imagePath, 0, 'S', $categoryId, 0, '60', 'Добавляет 31.25 Физ. Атк.', 'Destruction', 1, false, 'Святое Копье, саинт, сс, ss, пика, алебарда, древковое', null, 2052,
            13, 82, 'Health', 'Guidance', 'Haste', 'Увеличивает HP на 25%', 'Увеличивает Точность на 5', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Dynasty Halberd', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает HP на 492', 'Earth', 1, false, 'Алебарда Династии, дино, пика, алебарда, древковое', null, 3597,
            14, 285, 'Anger', 'Critical Stun', 'Light', 'Уменьшает HP на 15% и Увеличивает Физ. Атк. на 78', 'Даёт 48% шанс застанить при критической атаке', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Icarus Trident', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 377', 'Thunder', 1, false, 'Трезубец Икара, ик тридент, пика, алебарда, древковое', null, 4965,
            15, 399, 'Anger', 'Critical Stun', 'Light', 'Уменьшает HP на 15% Увеличивает Физ. Атк. на 78 При критической атаке', 'Даёт 48% шанс застанить при критической атаке', 'Увеличивает лимит веса на 20%' );
        seederAddRecipe( 'Vesper Stormer', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Крит. Атк. на 54.4', 'Thunder', 1, false, 'Буревестник Венеры, веспер штормет, стормер, пика, алебарда, древковое', null, 7050,
            16, 623, 'Guidance', 'Haste', 'Health', 'Увеличивает Точность на 7.5', 'Увеличивает Скорость Атаки на 11%', 'Увеличивает HP на 25%' );
    }

    protected function addFists() {
        $categoryId = $this->fistCategory->id;
        $imagePath  = 'item/weapon/fist';

        seederAddRecipe( 'Chakram', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 705,
            5, 97, 'Critical Drain', 'Critical Poison', 'Rsk. Haste', 'Поглощает 6 НР цели при критической атаке', 'Вероятность отравить цель 17% при критической атаке', 'Увеличивает Скорость атаки на 13%' );
        seederAddRecipe( 'Knuckle Duster', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 884,
            6, 238, 'Rsk. Evasion', 'Rsk. Haste', 'Haste', 'Увеличивает Уклонение на 7 при HP 60% и ниже', 'Увеличивает Скорость атаки на 12% при HP 60% и ниже', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Fisted Blade', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 1322,
            7, 306, 'Rsk. Evasion', 'Rsk. Haste', 'Haste', 'Увеличивает Уклонение на 6 при HP 60% и ниже', 'Увеличивает Скорость атаки на 12% при HP 60% и ниже', 'Увеличивает Скорость атаки на 7%' );
        seederAddRecipe( 'Great Pata', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пата когти, кастеты, костеты, кости', 6, 1885,
            8, 555, 'Critical Drain', 'Critical Poison', 'Rsk. Haste', 'Поглощает 10 НР цели при критической атаке', 'Увеличивает Скорость атаки на 11% при HP 60% и ниже', 'Увеличивает Скорость атаки на 11% при HP 60% и ниже' );
        seederAddRecipe( 'Arthro Nail', $imagePath, 0, 'B', $categoryId, 0, '60', 'Добавляет 21.2 Физ. Атк.', 'Destruction', 1, false, 'Коготь Артро, артро нейл, когти, кастеты, костеты, кости', 6, 891,
            9, 222, 'Critical Poison', 'Rsk. Evasion', 'Rsk. Haste', 'Вероятность отравить цель 14% при критической атаке', 'Увеличивает Уклонение на 6 при HP 60% и ниже', 'Увеличивает Скорость атаки на 10% при HP 60% и ниже' );
        seederAddRecipe( 'Arthro Nail 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Добавляет 21.2 Физ. Атк.', 'Destruction', 1, false, 'Коготь Артро, артро нейл, когти, кастеты, костеты, кости', 6, 891,
            9, 222, 'Critical Poison', 'Rsk. Evasion', 'Rsk. Haste', 'Вероятность отравить цель 14% при критической атаке', 'Увеличивает Уклонение на 6 при HP 60% и ниже', 'Увеличивает Скорость атаки на 10% при HP 60% и ниже' );
        seederAddRecipe( 'Bellion Cestus', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Цестус Беллиона, беллионы, белионы, когти, кастеты, костеты, кости', null, 1346,
            10, 339, 'Critical Drain', 'Critical Poison', 'Rsk. Haste', 'Поглощает 14 НР цели при критической атаке', 'Вероятность отравить цель 12% при критической атаке', 'Увеличивает Скорость атаки на 9% при HP 60% и ниже' );
        seederAddRecipe( 'Bellion Cestus 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Цестус Беллиона, беллионы, белионы, когти, кастеты, костеты, кости', null, 1346,
            10, 339, 'Critical Drain', 'Critical Poison', 'Rsk. Haste', 'Поглощает 14 НР цели при критической атаке', 'Вероятность отравить цель 12% при критической атаке', 'Увеличивает Скорость атаки на 9% при HP 60% и ниже' );
        seederAddRecipe( 'Blood Tornado', $imagePath, 0, 'A', $categoryId, 0, '60', 'Добавляет 26.9 Физ. Атк.', 'Destruction', 1, false, 'Кровавое Торнадо, блуд, блудик, когти, кастеты, костеты, кости', 7, 1128,
            11, 157, 'Haste', 'Focus', 'Anger', 'Увеличивает Скорость атаки на 6%', 'Увеличивает Физ. Крит. Атк. на 61', 'Уменьшает HP на 15% и Увеличивает Физ. Атк. на 38' );
        seederAddRecipe( 'Dragon Grinder', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает HP на 372', 'Earth', 1, false, 'Погибель Дракона, драгон гриндер, когти, кастеты, костеты, кости', null, 1659,
            12, 157, 'Rsk. Evasion', 'Guidance', 'Health', 'При HP равном 60% или ниже, Увеличивает Уклонение на 6', 'Увеличивает Точность на 5', 'Увеличивает HP на 25%' );
        seederAddRecipe( 'Sobekk\'s Hurricane', $imagePath, 0, 'A', $categoryId, 0, '60', 'С вероятностью 6% оглушает врага при физической атаке', 'Landslide', 1, false, 'Ураган Собекка, когти, кастеты, костеты, кости', null, 2157,
            12, 157, 'Rsk. Haste', 'Haste', 'Critical Drain', 'Увеличивает Скорость атаки на 11% при HP 60% и ниже', 'Увеличивает Скорость атаки на 6%', 'Увеличивает возможность поглощения 14 HP при критической атаке' );
        seederAddRecipe( 'Demon Splinter', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает мощь критической атаки на 528', 'Thunder', 1, false, 'Демон Одиночка, сплинтер, когти, кастеты, костеты, кости', null, 2052,
            13, 82, 'Focus', 'Health', 'Critical Stun', 'Увеличивает Физ. Крит. Атк. на 80', 'Увеличивает HP на 25%', 'Даёт 27% шанс застанить при критической атаке' );
        seederAddRecipe( 'Dynasty Bagh-Nakh', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Great Gale', 1, false, 'Коготь Тигра Династии, дино, когти, кастеты, костеты, кости', null, 3597,
            14, 285, 'Rsk. Evasion', 'Focus', 'Haste', 'Увеличивает Уклонение на 6.8 при HP 60% и ниже', 'увеличивает Фик. Крит. Атк. на 106', 'Увеличивает Скорость атаки на 10%' );
        seederAddRecipe( 'Icarus Hand', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Добавляет 51.26 Физ. Атк.', 'Destruction', 1, false, 'Рука Икара, ик, когти, кастеты, костеты, кости', null, 4965,
            15, 399, 'Rsk. Evasion', 'Focus', 'Haste', 'Увеличивает Уклонение на 6.8 при HP 60% и ниже', 'увеличивает Фик. Крит. Атк. на 106', 'Увеличивает Скорость атаки на 10%' );
        seederAddRecipe( 'Vesper Fighter', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 5%', 'Gale', 1, false, 'Воитель Венеры, веспер когти, кастеты, костеты, кости', null, 7050,
            16, 623, 'Health', 'Critical Stun', 'Focus', 'Увеличивает HP на 25%', 'Даёт 43% шанс застанить При критической атаке', 'Увеличивает Физ. Крит. Атк. на 123' );
    }

}
