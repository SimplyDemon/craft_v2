<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ArmorSeeder extends Seeder {
    protected Category $shieldCategory;
    protected Category $sigilCategory;

    protected Category $armorLightCategory;
    protected Category $armorLightFullBodyCategory;
    protected Category $armorLightUpperCategory;
    protected Category $armorLightLowerCategory;
    protected Category $armorLightHelmetCategory;
    protected Category $armorLightBootCategory;
    protected Category $armorLightGlovesCategory;

    protected Category $armorHeavyCategory;
    protected Category $armorHeavyFullBodyCategory;
    protected Category $armorHeavyUpperCategory;
    protected Category $armorHeavyLowerCategory;
    protected Category $armorHeavyHelmetCategory;
    protected Category $armorHeavyBootCategory;
    protected Category $armorHeavyGlovesCategory;

    protected Category $armorRobeCategory;
    protected Category $armorRobeFullBodyCategory;
    protected Category $armorRobeUpperCategory;
    protected Category $armorRobeLowerCategory;
    protected Category $armorRobeHelmetCategory;
    protected Category $armorRobeBootCategory;
    protected Category $armorRobeGlovesCategory;

    protected Category $armorUniversalCategory;
    protected Category $armorUniversalHelmetCategory;
    protected Category $armorUniversalBootCategory;
    protected Category $armorUniversalGlovesCategory;

    public function seed() {
        $this->setArmorCategories();
        $this->addArmors();
    }

    protected function setArmorCategories() {
        $armorCategory = Category::where( 'name', 'Armor' )->firstOrFail();

        $this->sigilCategory  = Category::where( 'name', 'Sigil' )->firstOrFail();
        $this->shieldCategory = Category::where( 'name', 'Shield' )->firstOrFail();

        $this->armorLightCategory         = Category::where( 'name', 'Light' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorLightFullBodyCategory = Category::where( 'name', 'Full body' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightUpperCategory    = Category::where( 'name', 'Upper' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightLowerCategory    = Category::where( 'name', 'Lower' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightHelmetCategory   = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightBootCategory     = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();
        $this->armorLightGlovesCategory   = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorLightCategory->id )->firstOrFail();

        $this->armorRobeCategory         = Category::where( 'name', 'Robe' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorRobeFullBodyCategory = Category::where( 'name', 'Full body' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeUpperCategory    = Category::where( 'name', 'Upper' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeLowerCategory    = Category::where( 'name', 'Lower' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeHelmetCategory   = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeBootCategory     = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();
        $this->armorRobeGlovesCategory   = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorRobeCategory->id )->firstOrFail();

        $this->armorHeavyCategory         = Category::where( 'name', 'Heavy' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorHeavyFullBodyCategory = Category::where( 'name', 'Full Body' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyUpperCategory    = Category::where( 'name', 'Upper' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyLowerCategory    = Category::where( 'name', 'Lower' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyHelmetCategory   = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyBootCategory     = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();
        $this->armorHeavyGlovesCategory   = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorHeavyCategory->id )->firstOrFail();

        $this->armorUniversalCategory       = Category::where( 'name', 'Universal' )->where( 'category_id', $armorCategory->id )->firstOrFail();
        $this->armorUniversalHelmetCategory = Category::where( 'name', 'Helmet' )->where( 'category_id', $this->armorUniversalCategory->id )->firstOrFail();
        $this->armorUniversalBootCategory   = Category::where( 'name', 'Boot' )->where( 'category_id', $this->armorUniversalCategory->id )->firstOrFail();
        $this->armorUniversalGlovesCategory = Category::where( 'name', 'Gloves' )->where( 'category_id', $this->armorUniversalCategory->id )->firstOrFail();
    }

    protected function addArmors() {
        $this->addArmorLight();
        $this->addArmorHeavy();
        $this->addArmorRobe();
        $this->addArmorUniversal();
        $this->addShield();
        $this->addSigil();

    }

    protected function addArmorLight() {
        $this->addArmorLightFullBody();
        $this->addArmorLightBoot();
        $this->addArmorLightGloves();
        $this->addArmorLightHelmet();
        $this->addArmorLightLower();
        $this->addArmorLightUpper();
    }

    protected function addArmorHeavy() {
        $this->addArmorHeavyFullBody();
        $this->addArmorHeavyBoot();
        $this->addArmorHeavyGloves();
        $this->addArmorHeavyHelmet();
        $this->addArmorHeavyLower();
        $this->addArmorHeavyUpper();
    }

    protected function addArmorRobe() {
        $this->addArmorRobeFullBody();
        $this->addArmorRobeBoot();
        $this->addArmorRobeGloves();
        $this->addArmorRobeHelmet();
        $this->addArmorRobeLower();
        $this->addArmorRobeUpper();
    }

    protected function addArmorUniversal() {
        $this->addArmorUniversalBoot();
        $this->addArmorUniversalGloves();
        $this->addArmorUniversalHelmet();
    }

    protected function addShield() {
        $categoryId = $this->shieldCategory->id;
        $imagePath  = 'item/shield';

        seederAddRecipe( 'Eldarake', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 41, );
        seederAddRecipe( 'Chain Shield', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 41, );
        seederAddRecipe( 'Dwarven Chain Shield', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 48, );
        seederAddRecipe( 'Knight\'s Shield', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 52, );
        seederAddRecipe( 'Tower Shield', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 79, );
        seederAddRecipe( 'Compound Shield', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 79, );
        seederAddRecipe( 'Full Plate Shield', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 116, );
        seederAddRecipe( 'Zubei\'s Shield', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 2%', null, 1, false, 'Щит Зубея, зубей', 6, 56, );
        seederAddRecipe( 'Zubei\'s Shield 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Защ. на 2%', null, 1, false, 'Щит Зубея, зубей', 6, 56, );
        seederAddRecipe( 'Avadon Shield', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 1%', null, 1, false, 'Щит Авадона', 6, 56, );
        seederAddRecipe( 'Avadon Shield 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Защ. на 1%', null, 1, false, 'Щит Авадона', 6, 56, );
        seederAddRecipe( 'Doom Shield', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 2%', null, 1, false, 'Щит Рока, дум', null, 87 );
        seederAddRecipe( 'Doom Shield 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Защ. на 2%', null, 1, false, 'Щит Рока, дум', null, 87 );
        seederAddRecipe( 'Dark Crystal Shield', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 2%', null, 1, false, 'Щит Кристалла Тьмы, дк, dc', 7, 75, );
        seederAddRecipe( 'Shield of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 2%', null, 1, false, 'Щит Кошмаров, нм, nm', null, 114 );
        seederAddRecipe( 'Imperial Crusader Shield', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 2%', null, 1, false, 'Щит Имперского Крестоносца, ик, ic', null, 161 );
        seederAddRecipe( 'Dynasty Shield', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 2%', null, 1, false, 'Щит Династии, дино', null, 307 );
        seederAddRecipe( 'Moirai Shield', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Защиту от Магии на 2%', null, 1, false, 'Щит Дестино, морай', null, 424 );
        seederAddRecipe( 'Vesper Shield', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Защиту от Магии на 2%', null, 1, false, 'Щит Венеры, веспер', null, 588 );
    }

    protected function addSigil() {
        $categoryId = $this->sigilCategory->id;
        $imagePath  = 'item/sigil';

        seederAddRecipe( 'Arcana Sigil', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 2% и уменьшает урон от прерывания заклинания на 13.', null, 1, false, 'Запечатанный Символ Тайн, ма, ma, сигиль, sigil', null, 161 );
        seederAddRecipe( 'Dynasty Sigil', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 2% и Защиту от Тьмы на 2.', null, 1, false, 'Символ Династии, дино, сигиль, sigil', null, 307 );
        seederAddRecipe( 'Moirai Sigil', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Защиту от Магии на 2%', null, 1, false, 'Символ Дестино, морай,  сигиль, sigil', null, 424 );
        seederAddRecipe( 'Vesper Sigil', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Защиту от Магии на 2%', null, 1, false, 'Символ Венеры, сигиль, sigil', null, 588 );
    }

    protected function addArmorLightFullBody() {
        $categoryId = $this->armorLightFullBodyCategory->id;
        $imagePath  = 'item/armor/light/full-body';

        seederAddRecipe( 'Drake Leather Armor', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 536, );
        seederAddRecipe( 'Avadon Leather Armor', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Грузоподъёмность на 11038<br>Увеличивает Маг. Защ.  на 17.08%', null, 1, false, 'Кожаный Доспех Авадона, тело, лайт, light', 6, 259, );
        seederAddRecipe( 'Avadon Leather Armor 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Грузоподъёмность на 11038<br>Увеличивает Маг. Защ.  на 17.08%', null, 1, false, 'Кожаный Доспех Авадона, тело, лайт, light', 6, 259, );
        seederAddRecipe( 'Blue Wolf Leather Armor', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Каста  на 15%<br>Увеличивает Физ. Защ.  на 2.19%', null, 1, false, 'Кожаный Доспех Синего Волка, бв, bw, тело, лайт, light', null, 402 );
        seederAddRecipe( 'Blue Wolf Leather Armor 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Каста  на 15%<br>Увеличивает Физ. Защ.  на 2.19%', null, 1, false, 'Кожаный Доспех Синего Волка, бв, bw, тело, лайт, light', null, 402 );
        seederAddRecipe( 'Leather Armor of Doom', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Объём Лёгких на 383<br>Увеличивает Физ. Атк. на 8.27%<br>Увеличивает Защиту от Отправления на 13<br>Увеличивает Реген MP  на 8.27%', null, 1, false, 'Кожаный Доспех Рока, дум, тело, лайт, light', null, 402 );
        seederAddRecipe( 'Leather Armor of Doom 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Объём Лёгких на 383<br>Увеличивает Физ. Атк. на 8.27%<br>Увеличивает Защиту от Отправления на 13<br>Увеличивает Реген MP  на 8.27%', null, 1, false, 'Кожаный Доспех Рока, дум, тело, лайт, light', null, 402 );
        seederAddRecipe( 'Tallum Leather Armor', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Защиту от Кровотечений на 52<br>Увеличивает MP на 315<br>Увеличивает Защиту от Яда на 52<br>Увеличивает Реген MP на 9.32%', null, 1, false, 'Кожаный Доспех Таллума, тело, лайт, light', 7, 347, );
        seederAddRecipe( 'Leather Armor of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Вампиризм на 3<br>Увеличивает Маг. Защ. на 8.27%<br>Увеличивает Защиту от Рута на 29.16<br>Увеличивает Защиту от Сна на 29.16', null, 1, false, 'Кожаный Доспех Кошмаров, тело, лайт, light', null, 528 );
        seederAddRecipe( 'Majestic Leather Armor', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Грузоподъёмность на 8159<br>Увеличивает MP на 340<br>Увеличивает Физ. Атк. на 9.32%<br>Увеличивает Защиту от Стана на 20.83', null, 1, false, 'Кожаный Доспех Величия, мж, mj, тело, лайт, light', null, 528 );
        seederAddRecipe( 'Draconic Leather Armor', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Грузоподъёмность на 8159<br>Увеличивает MP на 630<br>Увеличивает Физ. Атк. на 5.8%<br>Увеличивает Скорость Атаки на 5.8%', null, 1, false, 'Доспех из Драконьей Кожи, draconic, драконик, тело, лайт, light', null, 748 );
    }

    protected function addArmorLightUpper() {
        $categoryId = $this->armorLightUpperCategory->id;
        $imagePath  = 'item/armor/light/upper';

        seederAddRecipe( 'Reinforced Mithril Shirt', $imagePath, 0, 'C', $categoryId, 0, '100', '', null, 1, false, null, 4, 116, );
        seederAddRecipe( 'Plated Leather Armor', $imagePath, 0, 'C', $categoryId, 0, '100', '', null, 1, false, 'пл, верх, тело, лайт, light', 5, 137, );
        seederAddRecipe( 'Rind Leather Armor', $imagePath, 0, 'C', $categoryId, 0, '100', '', null, 1, false, null, 5, 149, );
        seederAddRecipe( 'Theca Leather Armor', $imagePath, 0, 'C', $categoryId, 0, '100', '', null, 1, false, 'Тека, верх, тело, лайт, light', 5, 254, );
        seederAddRecipe( 'Zubei\'s Leather Shirt', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Уклонение на 9.55', null, 1, false, 'Кожаная Рубаха Зубея, зубей, верх, тело, лайт, light', 6, 160, );
        seederAddRecipe( 'Zubei\'s Leather Shirt 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Уклонение на 9.55', null, 1, false, 'Кожаная Рубаха Зубея, зубей, верх, тело, лайт, light', 6, 160, );
        seederAddRecipe( 'Dark Crystal Leather Armor', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Защиту от Паралича на 20<br>Увеличивает Скорость Атаки на 7.24%<br>Увеличивает Физ. Атк. на 7.24%', null, 1, false, 'Кожаный Доспех Кристалла Тьмы, дк, dc, верх, тело, лайт, light', 7, 214, );
        seederAddRecipe( 'Dynasty Leather Armor', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 3.4<br>Увеличивает Защиту от Тьмы на 3.2<br>Увеличивает MP на 492<br>Увеличивает Скорость Атаки на 4.77%<br>Увеличивает Уклонение на 3.4', null, 1, false, 'Кожаный Доспех Династии, дино, верх, тело, лайт, light', null, 878 );
        seederAddRecipe( 'Moirai Leather Breastplate', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 4.26%<br>Увеличивает Защиту от Рута на 5<br>Увеличивает Реген MP на 4%<br>Увеличивает Защиту от Воды на 3', null, 1, false, 'Кожаная Кираса Дестино, морай, верх, тело, лайт, light', null, 1212 );
        seederAddRecipe( 'Vesper Leather Breastplate', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 5.57%<br>Увеличивает Скорость Атаки на 5%<br>Увеличивает Реген MP на 5%<br>Увеличивает MP на 347', null, 1, false, 'Кожаная Кираса Венеры, веспер, верх, тело, лайт, light', null, 1680 );
    }

    protected function addArmorLightLower() {
        $categoryId = $this->armorLightLowerCategory->id;
        $imagePath  = 'item/armor/light/lower';

        seederAddRecipe( 'Reinforced Mithril Gaiters', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 73, );
        seederAddRecipe( 'Plated Leather Gaiters', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пл, низ, лайт, light', 5, 86, );
        seederAddRecipe( 'Rind Leather Gaiters', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 93, );
        seederAddRecipe( 'Theca Leather Gaiters', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'Тека, низ, лайт, light', 5, 159, );
        seederAddRecipe( 'Zubei\'s Leather Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Уклонение на 1.47', null, 1, false, 'Кожаные Набедренники Зубея, зубей, низ, лайт, light', 6, 100, );
        seederAddRecipe( 'Zubei\'s Leather Gaiters 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Уклонение на 1.47', null, 1, false, 'Кожаные Набедренники Зубея, зубей, низ, лайт, light', 6, 100, );
        seederAddRecipe( 'Dark Crystal Leggings', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 1.03%<br>Увеличивает Физ. Атк. на 1.03%<br>Увеличивает Защиту от Паралича на 12.5', null, 1, false, 'Поножи Кристалла Тьмы, дк, dc, низ, лайт, light', 7, 134, );
        seederAddRecipe( 'Dynasty Leather Leggings', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 0.79<br>Увеличивает Уклонение на 0.79<br>Увеличивает HP на 205<br>Увеличивает Скорость Атаки на 0.68%<br>Увеличивает Защиту от Тьмы на 2', null, 1, false, 'Кожаные Поножи Династии, дино, низ, лайт, light', null, 549 );
        seederAddRecipe( 'Moirai Leather Leggings', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 2.08%<br>Увеличивает Защиту от Рута на 5<br>Увеличивает Реген MP на 1%67<br>Увеличивает Защиту от Воды на 3', null, 1, false, 'Кожаные Брюки Дестино, морай, низ, лайт, light', null, 758 );
        seederAddRecipe( 'Vesper Leather Leggings', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.68%<br>Увеличивает Скорость Атаки на 0.68%<br>Увеличивает Реген MP на 0.68%<br>Увеличивает MP на 145', null, 1, false, 'Кожаные Брюки Венеры, веспер, низ, лайт, light', null, 1050 );
    }

    protected function addArmorLightHelmet() {
        $categoryId = $this->armorLightHelmetCategory->id;
        $imagePath  = 'item/armor/light/helmet';

        seederAddRecipe( 'Draconic Leather Helmet', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 0.62%<br>Увеличивает Физ. Атк. на 0.62%<br>Увеличивает MP на 111<br>Увеличивает Грузоподъёмность на 1440', null, 1, false, 'Шлем из Драконьей Кожи, драконик, шлем, голова, каска, лайт, light', null, 230 );
        seederAddRecipe( 'Dynasty Leather Helmet', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 0.47<br>Увеличивает Уклонение на 0.47<br>Увеличивает HP на 123<br>Увеличивает Скорость Атаки на 0.41%<br>Увеличивает Защиту от Тьмы на 1.2', null, 1, false, 'Шлем Династии, дино, шлем, голова, каска, лайт, light', null, 439 );
        seederAddRecipe( 'Moirai Leather Helmet', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 1.25%<br>Увеличивает Защиту от Рута на 5<br>Увеличивает Реген MP на 1%<br>Увеличивает Защиту от Огня на 3', null, 1, false, 'Шлем Дестино, морай, шлем, голова, каска, лайт, light', null, 606 );
        seederAddRecipe( 'Vesper Leather Helmet', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Скорость Атаки на 0.41%<br>Увеличивает Реген MP на 0.41%<br>Увеличивает MP на 87', null, 1, false, 'Шлем Венеры, веспер, шлем, голова, каска, лайт, light', null, 840 );
    }

    protected function addArmorLightBoot() {
        $categoryId = $this->armorLightBootCategory->id;
        $imagePath  = 'item/armor/light/boot';

        seederAddRecipe( 'Draconic Leather Boots', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 0.41%<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает MP на 74<br>Увеличивает Грузоподъёмность на 960', null, 1, false, 'Сапоги из Драконьей Кожи, драконик, боты, ботинки, сапоги, лайт, light', null, 153 );
        seederAddRecipe( 'Dynasty Leather Boots', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Точность на 0.31<br>Увеличивает Уклонение на 0.31<br>Увеличивает HP на 82<br>Увеличивает Скорость Атаки на 0.27%<br>Увеличивает Защиту от Тьмы на 0.8', null, 1, false, 'Кожаные Сапоги Династии, дино, боты, ботинки, сапоги, лайт, light', null, 293 );
        seederAddRecipe( 'Moirai Leather Boots', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.83%<br>Увеличивает Защиту от Рута на 5<br>Увеличивает Реген MP на 0.67%<br>Увеличивает Защиту от Земли на 3', null, 1, false, 'Кожаные Сапоги Дестино, морай, боты, ботинки, сапоги, лайт, light', null, 404 );
        seederAddRecipe( 'Vesper Leather Boots', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.27%<br>Увеличивает Скорость Атаки на 0.27%<br>Увеличивает Реген MP на 0.27%<br>Увеличивает MP на 58', null, 1, false, 'Кожаные Сапоги Венеры, веспер, боты, ботинки, сапоги, лайт, light', null, 560 );
    }

    protected function addArmorLightGloves() {
        $categoryId = $this->armorLightGlovesCategory->id;
        $imagePath  = 'item/armor/light/gloves';

        seederAddRecipe( 'Draconic Leather Gloves', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Атаки на 0.41%<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает MP на 74<br>Увеличивает Грузоподъёмность на 960', null, 1, false, 'Перчатки из Драконьей Кожи, драконик, перчи, перчатки, рукавицы, лайт, light', null, 153 );
        seederAddRecipe( 'Dynasty Leather Gloves', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Уклонение на 0.31<br>Увеличивает Точность на 0.31<br>Увеличивает HP на 82<br>Увеличивает Скорость Атаки на 0.27%<br>Увеличивает Защиту от Тьмы на 0.8', null, 1, false, 'Кожаные Перчатки Династии, дино, перчи, перчатки, рукавицы, лайт, light', null, 293 );
        seederAddRecipe( 'Moirai Leather Gloves', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.83%<br>Увеличивает Защиту от Рута на 5<br>Увеличивает Реген MP на 0.67%<br>Увеличивает Защиту от Воздуха на 3', null, 1, false, 'Кожаные Перчатки Дестино, морай, перчи, перчатки, рукавицы, лайт, light', null, 404 );
        seederAddRecipe( 'Vesper Leather Gloves', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.27%<br>Увеличивает Скорость Атаки на 0.27%<br>Увеличивает Реген MP на 0.27%<br>Увеличивает MP на 58', null, 1, false, 'Кожаные Перчатки Венеры, веспер, перчи, перчатки, рукавицы, лайт, light', null, 560 );
    }

    protected function addArmorHeavyFullBody() {
        $categoryId = $this->armorHeavyFullBodyCategory->id;
        $imagePath  = 'item/armor/heavy/full-body';
        seederAddRecipe( 'Compound Armor', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'компот, тело, heavy, хеви', 5, 491, );
        seederAddRecipe( 'Full Plate Armor', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'фп, тело, heavy, хеви', 6, 715, );
        seederAddRecipe( 'Doom Plate Armor', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Объём Лёгких на 383<br>Увеличивает HP на 1093', null, 1, false, 'Латный Доспех Рока, дум, тело, heavy, хеви', null, 536 );
        seederAddRecipe( 'Doom Plate Armor 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Объём Лёгких на 383<br>Увеличивает HP на 1093', null, 1, false, 'Латный Доспех Рока, дум, тело, heavy, хеви', null, 536 );
        seederAddRecipe( 'Tallum Plate Armor', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Защиту от Кровотечений на 52<br>Увеличивает Грузоподъёмность на 8159<br>Увеличивает Защиту от Яда на 52<br>Увеличивает Скорость Атаки на 9.32%', null, 1, false, 'Латный Доспех Таллума, тело, heavy, хеви', 7, 463, );
        seederAddRecipe( 'Armor of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 17.08%<br>Увеличивает Защиту от Рута на 29.16<br>Увеличивает Защиту от Сна на 29.16', null, 1, false, 'Доспех Кошмаров, тело, heavy, хеви', null, 704 );
        seederAddRecipe( 'Majestic Plate Armor', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Точность на 0.579<br>Увеличивает Физ. Атк. на 8.27%<br>Увеличивает Защиту от Стана на 20.83', null, 1, false, 'Латный Доспех Величия, мж, mj, тело, heavy, хеви', null, 704 );

    }

    protected function addArmorHeavyUpper() {
        $categoryId = $this->armorHeavyUpperCategory->id;
        $imagePath  = 'item/armor/heavy/upper';

        seederAddRecipe( 'Chain Mail Shirt', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 155, );
        seederAddRecipe( 'Dwarven Chain Mail Shirt', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 198, );
        seederAddRecipe( 'Zubei\'s Breastplate', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 294<br>Увеличивает Физ. Защ. на 7.24%', null, 1, false, 'Кираса Зубея, зубей, верх, хеви, heavy', 6, 213, );
        seederAddRecipe( 'Zubei\'s Breastplate 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 294<br>Увеличивает Физ. Защ. на 7.24%', null, 1, false, 'Кираса Зубея, зубей, верх, хеви, heavy', 6, 213, );
        seederAddRecipe( 'Avadon Breastplate', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 833', null, 1, false, 'Кираса Авадона, верх, хеви, heavy', 6, 213, );
        seederAddRecipe( 'Avadon Breastplate 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 833', null, 1, false, 'Кираса Авадона, верх, хеви, heavy', 6, 213, );
        seederAddRecipe( 'Blue Wolf Breastplate', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Реген HP на 7.24%<br>Увеличивает Скорость Бега на 7', null, 1, false, 'Кираса Синего Волка, бв, bw, верх, хеви, heavy', null, 330 );
        seederAddRecipe( 'Blue Wolf Breastplate 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Реген HP на 7.24%<br>Увеличивает Скорость Бега на 7', null, 1, false, 'Кираса Синего Волка, бв, bw, верх, хеви, heavy', null, 330 );
        seederAddRecipe( 'Dark Crystal Breastplate', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Эффективность магии, восстанавливающей HP самому себе на 12%<br>Увеличивает Защиту от Паралича на 20', null, 1, false, 'Кираса Кристалла Тьмы, дк, dc, верх, хеви, heavy', 7, 285, );
        seederAddRecipe( 'Imperial Crusader Breastplate', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает HP на 889<br>Увеличивает Физ. Защ. на 7.24%<br>Увеличивает Защиту от Рута на 28<br>Увеличивает Защиту от Сна на 28', null, 1, false, 'Кираса Имперского Крестоносца, ик, ic, верх, хеви, heavy', null, 613 );
        seederAddRecipe( 'Dynasty Breastplate', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Защиту от Тьмы на 3.2<br>Увеличивает HP на 984<br>Увеличивает Физ. Защ. на 7.24%', null, 1, false, 'Кираса Династии, дино, верх, хеви, heavy', null, 1171 );
        seederAddRecipe( 'Moirai Breastplate', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 4.26%<br>Увеличивает Скорость Атаки на 4%<br>Увеличивает Защиту от Стана на 5<br>Увеличивает Защиту от Воды на 1<br>Увеличивает Защиту от Огня на 1<br>Увеличивает Защиту от Воздуха на 1<br>Увеличивает Защиту от Земли на 1', null, 1, false, 'Кираса Дестино, морай, верх, хеви, heavy', null, 1616 );
        seederAddRecipe( 'Vesper Breastplate', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 5.57%<br>Увеличивает Физ. Защ. на 5.57%<br>Увеличивает HP на 531<br>Увеличивает Защиту от Сна на 28<br>Увеличивает Защиту от Рута на 28', null, 1, false, 'Кираса Венеры, весер, верх, хеви, heavy', null, 2240 );
    }

    protected function addArmorHeavyLower() {
        $categoryId = $this->armorHeavyLowerCategory->id;
        $imagePath  = 'item/armor/heavy/lower';

        seederAddRecipe( 'Chain Gaiters', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 97, );
        seederAddRecipe( 'Dwarven Chain Gaiters', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 124, );
        seederAddRecipe( 'Zubei\'s Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 2.08%<br>Увеличивает HP на 123', null, 1, false, 'Набедренники Зубея, зубей, низ, ноги, хеви, heavy', 6, 133, );
        seederAddRecipe( 'Zubei\'s Gaiters 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Физ. Защ. на 2.08%<br>Увеличивает HP на 123', null, 1, false, 'Набедренники Зубея, зубей, низ, ноги, хеви, heavy', 6, 133, );
        seederAddRecipe( 'Avadon Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает HP на 122', null, 1, false, 'Набедренники Авадона, низ, ноги, хеви, heavy', 6, 133, );
        seederAddRecipe( 'Avadon Gaiters 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает HP на 122', null, 1, false, 'Набедренники Авадона, низ, ноги, хеви, heavy', 6, 133, );
        seederAddRecipe( 'Blue Wolf Gaiters', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Бега на 2.91<br>Увеличивает Реген HP на 2.08%', null, 1, false, 'Набедренники Синего Волка, бв, bw, низ, ноги, хеви, heavy', null, 206 );
        seederAddRecipe( 'Blue Wolf Gaiters 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Бега на 2.91<br>Увеличивает Реген HP на 2.08%', null, 1, false, 'Набедренники Синего Волка, бв, bw, низ, ноги, хеви, heavy', null, 206 );
        seederAddRecipe( 'Dark Crystal Gaiters', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Эффективность магии, восстанавливающей HP самому себе на 2%<br>Увеличивает Защиту от Паралича на 12.5', null, 1, false, 'Набедренники Кристалла Тьмы, дк, dc, низ, ноги, хеви, heavy', 7, 178, );
        seederAddRecipe( 'Imperial Crusader Gaiters', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 2.08%<br>Увеличивает HP на 185<br>Увеличивает Защиту от Сна на 17.5<br>Увеличивает Защиту от Рута на 17.5', null, 1, false, 'Набедренники Имперского Крестоносца, ик, ic, низ, ноги, хеви, heavy', null, 383 );
        seederAddRecipe( 'Dynasty Gaiters', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 2.08%<br>Увеличивает HP на 205<br>Увеличивает Защиту от Тьмы на 2', null, 1, false, 'Скованные Набедренники Династии, дино, низ, ноги, хеви, heavy', null, 731 );
        seederAddRecipe( 'Moirai Gaiters', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 2.08%<br>Увеличивает Скорость Атаки на 1%67<br>Увеличивает Защиту от Стана на 5<br>Увеличивает Защиту от Воды на 3', null, 1, false, 'Набедренники Дестино, морай, низ, ноги, хеви, heavy', null, 1010 );
        seederAddRecipe( 'Vesper Gaiters', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 1.03%<br>Увеличивает Физ. Защ. на 1.03%<br>Увеличивает HP на 55<br>Увеличивает Защиту от Сна на 18<br>Увеличивает Защиту от Рута на 18', null, 1, false, 'Набедренники Венеры, веспер, низ, ноги, хеви, heavy', null, 1400 );
    }

    protected function addArmorHeavyHelmet() {
        $categoryId = $this->armorHeavyHelmetCategory->id;
        $imagePath  = 'item/armor/heavy/helmet';

        seederAddRecipe( 'Imperial Crusader Helmet', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 1.25%<br>Увеличивает HP на 111<br>Увеличивает Защиту от Сна на 10.5<br>Увеличивает Защиту от Рута на 10.5', null, 1, false, 'Шлем Имперского Крестоносца, ic, ик, шлем, каска, голова, хеви, heavy', null, 230 );
        seederAddRecipe( 'Dynasty Helmet', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 1.25%<br>Увеличивает HP на 123<br>Увеличивает Защиту от Тьмы на 1.2', null, 1, false, 'Шлем Династии, дино, шлем, каска, голова, хеви, heavy', null, 439 );
        seederAddRecipe( 'Moirai Helmet', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 1.25%<br>Увеличивает Скорость Атаки на 1%<br>Увеличивает Защиту от Стана на 5<br>Увеличивает Защиту от Огня на 3', null, 1, false, 'Шлем Дестино, дино, шлем, каска, голова, хеви, heavy', null, 606 );
        seederAddRecipe( 'Vesper Helmet', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.62%<br>Увеличивает Физ. Защ. на 0.62%<br>Увеличивает HP на 133<br>Увеличивает Защиту от Сна на 1<br>Увеличивает Защиту от Рута на 1', null, 1, false, 'Шлем Венеры, веспер, шлем, каска, голова, хеви, heavy', null, 840 );
    }

    protected function addArmorHeavyBoot() {
        $categoryId = $this->armorHeavyBootCategory->id;
        $imagePath  = 'item/armor/heavy/boot';

        seederAddRecipe( 'Imperial Crusader Boots', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 0.83%<br>Увеличивает HP на 74<br>Увеличивает Защиту от Сна на 7<br>Увеличивает Защиту от Рута на 7', null, 1, false, 'Сапоги Имперского Крестоносца, ic, ик, боты, сапоги, ботинки, хеви, heavy', null, 153 );
        seederAddRecipe( 'Dynasty Boots', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 0.83%<br>Увеличивает HP на 82<br>Увеличивает Защиту от Тьмы на 0.8', null, 1, false, 'Сапоги Династии, дино, боты, сапоги, ботинки, хеви, heavy', null, 293 );
        seederAddRecipe( 'Moirai Boots', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.83%<br>Увеличивает Скорость Атаки на 0.67%<br>Увеличивает Защиту от Стана на 5<br>Увеличивает Защиту от Земли на 3', null, 1, false, 'Сапоги Дестино, морай, боты, сапоги, ботинки, хеви, heavy', null, 404 );
        seederAddRecipe( 'Vesper Boots', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Физ. Защ. на 0.41%<br>Увеличивает HP на 22<br>Увеличивает Защиту от Сна на 7<br>Увеличивает Защиту от Рута на 7', null, 1, false, 'Сапоги Венеры, веспер, боты, сапоги, ботинки, хеви, heavy', null, 560 );
    }

    protected function addArmorHeavyGloves() {
        $categoryId = $this->armorHeavyGlovesCategory->id;
        $imagePath  = 'item/armor/heavy/gloves';

        seederAddRecipe( 'Imperial Crusader Gauntlets', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 0.83%<br>Увеличивает HP на 74<br>Увеличивает Защиту от Сна на 7<br>Увеличивает Защиту от Рута на 7', null, 1, false, 'Рукавицы Имперского Крестоносца, ic, ик, перчатки, перчи, рукавицы, хеви, heavy', null, 153 );
        seederAddRecipe( 'Dynasty Gauntlets', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Физ. Защ. на 0.83%<br>Увеличивает HP на 82<br>Увеличивает Защиту от Тьмы на 0.8', null, 1, false, 'Рукавицы Династии, дино, перчатки, перчи, рукавицы, хеви, heavy', null, 293 );
        seederAddRecipe( 'Moirai Gauntlets', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.83%<br>Увеличивает Скорость Атаки на 0.67%<br>Увеличивает Защиту от Стана на 5<br>Увеличивает Защиту от Воздуха на 3', null, 1, false, 'Рукавицы Дестино, морай, перчатки, перчи, рукавицы, хеви, heavy', null, 404 );
        seederAddRecipe( 'Vesper Gauntlets', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Физ. Защ. на 0.41%<br>Увеличивает HP на 22<br>Увеличивает Защиту от Сна на 7<br>Увеличивает Защиту от Рута на 7', null, 1, false, 'Рукавицы Венеры, веспер, перчатки, перчи, рукавицы, хеви, heavy', null, 560 );
    }


    protected function addArmorRobeFullBody() {
        $categoryId = $this->armorRobeFullBodyCategory->id;
        $imagePath  = 'item/armor/robe/full-body';

        seederAddRecipe( 'Robe of Seal', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 242, );
        seederAddRecipe( 'Avadon Robe', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Каста  на 15%<br>Увеличивает Маг. Защ.  на 17.08%', null, 1, false, 'Мантия Авадона, тело, роба, robe, маг', 6, 259, );
        seederAddRecipe( 'Avadon Robe 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Каста  на 15%<br>Увеличивает Маг. Защ.  на 17.08%', null, 1, false, 'Мантия Авадона, тело, роба, robe, маг', 6, 259, );
        seederAddRecipe( 'Dark Crystal Robe', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Защиту от Кансела на 8.33<br>Увеличивает Скорость Каста  на 15%<br>Увеличивает Защиту от Паралича на 20<br>Увеличивает Физ. Защ. на 3.33%<br>Увеличивает Скорость Бега на 2.91', null, 1, false, 'Мантия Кристалла Тьмы, dc, дк, тело, роба, robe, маг', 7, 347, );
        seederAddRecipe( 'Robe of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 8.27%<br>Увеличивает Реген MP  на 8.27%<br>Увеличивает Защиту от Рута на 29.16<br>Увеличивает Защиту от Сна на 29.16', null, 1, false, 'Мантия Кошмаров, тело, роба, robe, маг', null, 528 );
        seederAddRecipe( 'Majestic Robe', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Скорость Каста  на 15%<br>Увеличивает Реген MP на 3.33%<br>Увеличивает Защиту от Стана на 20.83', null, 1, false, 'Мантия Величия, мж, mj, тело, роба, robe, маг', null, 528 );
        seederAddRecipe( 'Major Arcana Robe', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Защиту от Кансела на 21<br>Увеличивает Грузоподъёмность на 8159<br>Увеличивает Маг. Атк. на 16.03%<br>Увеличивает СкоростьБега на 9.91%<br>Увеличивает Защиту от Стана на 20.83', null, 1, false, 'Мантия Тайн, ма, ma, тело, роба, robe, маг', null, 748 );
    }

    protected function addArmorRobeUpper() {
        $categoryId = $this->armorRobeUpperCategory->id;
        $imagePath  = 'item/armor/robe/upper';

        seederAddRecipe( 'Karmian Tunic', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кармиан, верх, роба, маг, robe', 4, 116, );
        seederAddRecipe( 'Demon\'s Tunic', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'верх, роба, маг, robe', 5, 226, );
        seederAddRecipe( 'Divine Tunic', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'верх, роба, маг, robe', 6, 330, );
        seederAddRecipe( 'Tunic of Zubei', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 15%', null, 1, false, 'Туника Зубея, зубей, верх, роба, маг, robe', 6, 160, );
        seederAddRecipe( 'Tunic of Zubei 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Атк. на 15%', null, 1, false, 'Туника Зубея, зубей, верх, роба, маг, robe', 6, 160, );
        seederAddRecipe( 'Blue Wolf Tunic', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает MP на 205<br>Увеличивает Реген MP на 7.24%', null, 1, false, 'Туника Синего Волка, бв, bw, верх, роба, маг, robe', null, 248 );
        seederAddRecipe( 'Blue Wolf Tunic 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает MP на 205<br>Увеличивает Реген MP на 7.24%', null, 1, false, 'Туника Синего Волка, бв, bw, верх, роба, маг, robe', null, 248 );
        seederAddRecipe( 'Tunic of Doom', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Объём Лёгких на 200<br>Увеличивает Реген MP на 7.24%<br>Увеличивает Скорость Бега на 7', null, 1, false, 'Туника Рока, дум, верх, роба, маг, robe', null, 248 );
        seederAddRecipe( 'Tunic of Doom 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Объём Лёгких на 200<br>Увеличивает Реген MP на 7.24%<br>Увеличивает Скорость Бега на 7', null, 1, false, 'Туника Рока, дум, верх, роба, маг, robe', null, 248 );
        seederAddRecipe( 'Tallum Tunic', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Скорость Каста  на 15%', null, 1, false, 'Туника Таллума, верх, роба, маг, robe', 7, 214, );
        seederAddRecipe( 'Dynasty Tunic', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Скорость Каста  на 15%', null, 1, false, 'Туника Династии, дино, верх, роба, маг, robe', null, 878 );
        seederAddRecipe( 'Moirai Tunic', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 8.11%<br>Увеличивает Скорость Каста  на 15%<br>Увеличивает Защиту от Паралича на 5<br>Увеличивает Защиту от Воды на 1<br>Увеличивает Защиту от Огня на 1<br>Увеличивает Защиту от Воздуха на 1<br>Увеличивает Защиту от Земли на 1', null, 1, false, 'Туника Дестино, морай, верх, роба, маг, robe', null, 1212 );
        seederAddRecipe( 'Vesper Tunic', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 8.47%<br>Увеличивает Скорость Каста  на 15%<br>Увеличивает Реген MP на 5%<br>Увеличивает Защиту от Стана на 20<br>Увеличивает Защиту от Кансела на 12', null, 1, false, 'Туника Венеры, веспер, верх, роба, маг, robe', null, 1680 );
    }

    protected function addArmorRobeLower() {
        $categoryId = $this->armorRobeLowerCategory->id;
        $imagePath  = 'item/armor/robe/lower';

        seederAddRecipe( 'Karmian Stockings', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кармиан, низ, маг, роба', 4, 73, );
        seederAddRecipe( 'Demon\'s Stockings', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'низ, маг, роба', 5, 142, );
        seederAddRecipe( 'Divine Stockings', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'низ, маг, роба', 6, 206, );
        seederAddRecipe( 'Stockings of Doom', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Скорость Бега на 2.91<br>Увеличивает Объём Лёгких на 88<br>Увеличивает Реген MP на 2.08%', null, 1, false, 'Штаны Рока, дум, низ, маг, роба', null, 100 );
        seederAddRecipe( 'Stockings of Doom 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Скорость Бега на 2.91<br>Увеличивает Объём Лёгких на 88<br>Увеличивает Реген MP на 2.08%', null, 1, false, 'Штаны Рока, дум, низ, маг, роба', null, 100 );
        seederAddRecipe( 'Blue Wolf Stockings', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает MP на 85<br>Увеличивает Реген MP на 2.08%', null, 1, false, 'Штаны Синего Волка, бв, bw, низ, маг, роба', null, 155 );
        seederAddRecipe( 'Blue Wolf Stockings 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает MP на 85<br>Увеличивает Реген MP на 2.08%', null, 1, false, 'Штаны Синего Волка, бв, bw, низ, маг, роба', null, 155 );
        seederAddRecipe( 'Stockings of Zubei', $imagePath, 0, 'B', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 2.08%', null, 1, false, 'Штаны Зубея, зубей, низ, маг, роба', 6, 155, );
        seederAddRecipe( 'Stockings of Zubei 100%', $imagePath, 0, 'B', $categoryId, 0, '100', 'Увеличивает Маг. Атк. на 2.08%', null, 1, false, 'Штаны Зубея, зубей, низ, маг, роба', 6, 155, );
        seederAddRecipe( 'Tallum Stockings', $imagePath, 0, 'A', $categoryId, 0, '60', 'Увеличивает Маг. Защ. на 3.33%<br>Увеличивает Защиту от Отправления на 33.33<br>Увеличивает Защиту от Кровотечений на 33.33', null, 1, false, 'Штаны Таллума, низ, маг, роба', 7, 134, );
        seederAddRecipe( 'Dynasty Stockings', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 2.08%<br>Увеличивает MP на 133<br>Увеличивает Защиту от Тьмы на 3.33', null, 1, false, 'Штаны Династии, дино, низ, маг, роба', null, 549 );
        seederAddRecipe( 'Moirai Stockings', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 1.03%<br>Увеличивает Защиту от Паралича на 5<br>Увеличивает Защиту от Воды на 5', null, 1, false, 'Штаны Дестино, морай, низ, маг, роба', null, 758 );
        seederAddRecipe( 'Vesper Stockings', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.68%<br>Увеличивает Реген MP на 0.68%<br>Увеличивает Защиту от Стана на 5<br>Увеличивает Защиту от Кансела на 7.5', null, 1, false, 'Штаны Венеры, веспер, низ, маг, роба', null, 1050 );
    }

    protected function addArmorRobeHelmet() {
        $categoryId = $this->armorRobeHelmetCategory->id;
        $imagePath  = 'item/armor/robe/helmet';

        seederAddRecipe( 'Major Arcana Circlet', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.62%<br>Увеличивает Скорость Бега на 1.175<br>Увеличивает Защиту от Кансела на 13<br>Увеличивает Грузоподъёмность на 1440<br>Увеличивает Защиту от Стана на 12.5', null, 1, false, 'Диадема Тайн, ма, ma, шлем, каска, голова, маг, роба, robe', null, 230 );
        seederAddRecipe( 'Dynasty Circlet', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 1.25%<br>Увеличивает MP на 80<br>Увеличивает Защиту от Тьмы на 2', null, 1, false, 'Диадема Династии, дино, шлем, каска, голова, маг, роба, robe', null, 439 );
        seederAddRecipe( 'Moirai Circlet', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.62%<br>Увеличивает Защиту от Паралича на 5<br>Увеличивает Защиту от Огня на 5', null, 1, false, 'Диадема Дестино, морай, шлем, каска, голова, маг, роба, robe', null, 606 );
        seederAddRecipe( 'Vesper Circlet', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.41%<br>Увеличивает Реген MP на 0.41%<br>Увеличивает Защиту от Стана на 8<br>Увеличивает Защиту от Кансела на 4.5', null, 1, false, 'Диадема Венеры, веспер, шлем, каска, голова, маг, роба, robe', null, 840 );
    }

    protected function addArmorRobeBoot() {
        $categoryId = $this->armorRobeBootCategory->id;
        $imagePath  = 'item/armor/robe/boot';

        seederAddRecipe( 'Major Arcana Boots', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.41%<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Защиту от Кансела на 8<br>Увеличивает Грузоподъёмность на 960<br>Увеличивает Защиту от Стана на 8.3', null, 1, false, 'Сапоги Тайн, ma, ма, боты, ботинки, сапоги, роба, robe, маг', null, 153 );
        seederAddRecipe( 'Dynasty Shoes', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.83%<br>Увеличивает MP на 53<br>Увеличивает Защиту от Тьмы на 1.33', null, 1, false, 'Ботинки Династии, дино, боты, ботинки, сапоги, роба, robe, маг', null, 293 );
        seederAddRecipe( 'Moirai Shoes', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.41%<br>Увеличивает Защиту от Паралича на 5<br>Увеличивает Защиту от Земли на 5', null, 1, false, 'Ботинки Дестино, морай, боты, ботинки, сапоги, роба, robe, маг', null, 404 );
        seederAddRecipe( 'Vesper Shoes', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.27%<br>Увеличивает Реген MP на 0.27%<br>Увеличивает Защиту от Стана на 5<br>Увеличивает Защиту от Кансела на 3', null, 1, false, 'Ботинки Венеры, боты, ботинки, сапоги, роба, robe, маг', null, 560 );
    }

    protected function addArmorRobeGloves() {
        $categoryId = $this->armorRobeGlovesCategory->id;
        $imagePath  = 'item/armor/robe/gloves';

        seederAddRecipe( 'Major Arcana Gloves', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.41%<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Защиту от Кансела на 8<br>Увеличивает Грузоподъёмность на 960<br>Увеличивает Защиту от Стана на 8.3', null, 1, false, 'Перчатки Тайн, ма, ma, перчатки, перчи, рукавицы, маг, robe, роба', null, 153 );
        seederAddRecipe( 'Dynasty Gloves', $imagePath, 0, 'S', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.83%<br>Увеличивает MP на 53<br>Увеличивает Защиту от Тьмы на 1.33', null, 1, false, 'Перчатки Династии, дино, перчатки, перчи, рукавицы, маг, robe, роба', null, 293 );
        seederAddRecipe( 'Moirai Gloves', $imagePath, 0, 'S-80', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.41%<br>Увеличивает Защиту от Паралича на 5<br>Увеличивает Защиту от Воздуха на 5', null, 1, false, 'Перчатки Дестино, морай, перчатки, перчи, рукавицы, маг, robe, роба', null, 404 );
        seederAddRecipe( 'Vesper Gloves', $imagePath, 0, 'S-84', $categoryId, 0, '60', 'Увеличивает Маг. Атк. на 0.27%<br>Увеличивает Реген MP на 0.27%<br>Увеличивает Защиту от Стана на 5<br>Увеличивает Защиту от Кансела на 3', null, 1, false, 'Перчатки Венеры, веспер, перчатки, перчи, рукавицы, маг, robe, роба', null, 560 );
    }

    protected function addArmorUniversalHelmet() {
        $categoryId = $this->armorUniversalHelmetCategory->id;
        $imagePath  = 'item/armor/universal/helmet';

        seederAddRecipe( 'Chain Hood', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 58, );
        seederAddRecipe( 'Compound Helmet', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'компот, шлем, каска, голова', 5, 113, );
        seederAddRecipe( 'Full Plate Helmet', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'фп, шлем, каска, голова', 6, 165, );
        seederAddRecipe( 'Avadon Circlet', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает HP на 73<br><b>Light</b>:<br>Увеличивает Маг. Защ. на 1%25<br>Увеличивает Грузоподъёмность на 1440<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 1.25%', null, 1, false, 'Диадема Авадона, шлем, каска, голова', 6, 80, );
        seederAddRecipe( 'Avadon Circlet 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает HP на 73<br><b>Light</b>:<br>Увеличивает Маг. Защ. на 1%25<br>Увеличивает Грузоподъёмность на 1440<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 1.25%', null, 1, false, 'Диадема Авадона, шлем, каска, голова', 6, 80, );
        seederAddRecipe( 'Zubei\'s Helmet', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Физ. Защ. на 1.25%<br>Увеличивает HP на 74<br><b>Light</b>:<br>Увеличивает Уклонение на 0.88<br><b>Robe</b>:<br>Увеличивает Маг. Атк. на 1.25%', null, 1, false, 'Шлем Зубея, зубей, шлем, каска, голова', 6, 80, );
        seederAddRecipe( 'Zubei\'s Helmet 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает Физ. Защ. на 1.25%<br>Увеличивает HP на 74<br><b>Light</b>:<br>Увеличивает Уклонение на 0.88<br><b>Robe</b>:<br>Увеличивает Маг. Атк. на 1.25%', null, 1, false, 'Шлем Зубея, зубей, шлем, каска, голова', 6, 80, );
        seederAddRecipe( 'Blue Wolf Helmet', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Скорость Бега на 1.75<br>Увеличивает Реген HP на 1.25%<br><b>Light</b>:<br>Увеличивает Физ. Защ. на 1%32<br><b>Robe</b>:<br>Увеличивает MP на 51<br>Увеличивает Реген MP на 1.25%', null, 1, false, 'Шлем Синего Волка, бв, bw, шлем, каска, голова', null, 124 );
        seederAddRecipe( 'Blue Wolf Helmet 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает Скорость Бега на 1.75<br>Увеличивает Реген HP на 1.25%<br><b>Light</b>:<br>Увеличивает Физ. Защ. на 1%32<br><b>Robe</b>:<br>Увеличивает MP на 51<br>Увеличивает Реген MP на 1.25%', null, 1, false, 'Шлем Синего Волка, бв, bw, шлем, каска, голова', null, 124 );
        seederAddRecipe( 'Doom Helmet', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает HP на 80<br>Увеличивает Объём Лёгких на 50<br><b>Light</b>:<br>Увеличивает Объём Лёгких на 50<br>Увеличивает Физ. Атк. на 0.62%<br>Увеличивает Реген MP на 0.62%<br>Увеличивает Защиту от Отправления на 2<br><b>Robe</b>:<br>Увеличивает Скорость Бега на 1.75<br>Увеличивает Объём Лёгких на 50<br>Увеличивает Реген MP на 1.25%', null, 1, false, 'Шлем Рока, дум, шлем, каска, голова', null, 124 );
        seederAddRecipe( 'Doom Helmet 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает HP на 80<br>Увеличивает Объём Лёгких на 50<br><b>Light</b>:<br>Увеличивает Объём Лёгких на 50<br>Увеличивает Физ. Атк. на 0.62%<br>Увеличивает Реген MP на 0.62%<br>Увеличивает Защиту от Отправления на 2<br><b>Robe</b>:<br>Увеличивает Скорость Бега на 1.75<br>Увеличивает Объём Лёгких на 50<br>Увеличивает Реген MP на 1.25%', null, 1, false, 'Шлем Рока, дум, шлем, каска, голова', null, 124 );
        seederAddRecipe( 'Dark Crystal Helmet', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Эффективность магии, восстанавливающей HP самому себе на 1%<br>Увеличивает Защиту от Паралича на 7.5<br><b>Light</b>:<br>Увеличивает Скорость Атаки на 0.62%<br>Увеличивает Физ. Атк. на 0.62%<br>Увеличивает Защиту от Паралича на 7.5<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 2%<br>Увеличивает Скорость Бега на 1.75<br>Увеличивает Защиту от Кансела на 13<br>Увеличивает Защиту от Паралича на 12.5', null, 1, false, 'Шлем Кристалла Тьмы, дк, dc, шлем, каска, голова', 7, 107, );
        seederAddRecipe( 'Tallum Helmet', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Скорость Атаки на 1.25%<br>Увеличивает Грузоподъёмность на 1440<br>Увеличивает Защиту от Отправления на 12<br>Увеличивает Защиту от Кровотечений на 12<br><b>Light</b>:<br>Увеличивает Реген MP на 1.25%<br>Увеличивает MP на 56<br>Увеличивает Защиту от Отправления на 12<br>Увеличивает Защиту от Кровотечений на 12<br><b>Robe</b>:<br>Увеличивает Маг. Защ. на 2%<br>Увеличивает Защиту от Отправления на 20<br>Увеличивает Защиту от Кровотечений на 20', null, 1, false, 'Шлем Таллума, шлем, каска, голова', 7, 107, );
        seederAddRecipe( 'Helm of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Физ. Атк. на 1.25%<br>Увеличивает Защиту от Сна на 17.5<br>Увеличивает Защиту от Рута на 17.5<br><b>Light</b>:<br>Увеличивает Маг. Защ. на 0.62%<br>Увеличивает Защиту от Сна на 17.5<br>Увеличивает Защиту от Рута на 17.5<br><b>Robe</b>:<br>Увеличивает Реген MP на 0.62%<br>Увеличивает Маг. Атк. на 0.62%<br>Увеличивает Защиту от Сна на 17.5<br>Увеличивает Защиту от Рута на 17.5', null, 1, false, 'Шлем Кошмаров, шлем, каска, голова', null, 163 );
        seederAddRecipe( 'Majestic Circlet', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Физ. Атк. на 0.62%<br>Увеличивает Точность на 0.47<br>Увеличивает Защиту от Стана на 12.5<br><b>Light</b>:<br>Увеличивает Физ. Атк. на 1.25%<br>Увеличивает MP на 60<br>Увеличивает Грузоподъёмность на 1440<br>Увеличивает Защиту от Стана на 12.5<br><b>Robe</b>:<br>Увеличивает MP на 60<br>Увеличивает Реген MP на 2%<br>Увеличивает Защиту от Стана на 12.5', null, 1, false, 'Диадема Величия, мж, mj, шлем, каска, голова', null, 163 );
    }

    protected function addArmorUniversalBoot() {
        $categoryId = $this->armorUniversalBootCategory->id;
        $imagePath  = 'item/armor/universal/boot';

        seederAddRecipe( 'Reinforced Mithril Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 39, );
        seederAddRecipe( 'Chain Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 39, );
        seederAddRecipe( 'Karmian Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кармиан, боты, сапоги, ботинки', 4, 39, );
        seederAddRecipe( 'Plated Leather Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пл, боты, сапоги, ботинки', 4, 39, );
        seederAddRecipe( 'Dwarven Chain Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 39, );
        seederAddRecipe( 'Boots of Seal', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 39, );
        seederAddRecipe( 'Crimson Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 50, );
        seederAddRecipe( 'Rind Leather Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 50, );
        seederAddRecipe( 'Compound Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'компот, боты, сапоги, ботинки', 5, 76, );
        seederAddRecipe( 'Demon\'s Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'боты, сапоги, ботинки', 5, 76, );
        seederAddRecipe( 'Theca Leather Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'тека, боты, сапоги, ботинки', 5, 85, );
        seederAddRecipe( 'Drake Leather Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 110, );
        seederAddRecipe( 'Full Plate Boots', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'фп, боты, сапоги, ботинки', 6, 110, );
        seederAddRecipe( 'Zubei\'s Boots', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Физ. Защ. на 0.83%<br>Увеличивает HP на 49<br><b>Light</b>:<br>Увеличивает Уклонение на 0.59<br><b>Robe</b>:<br>Увеличивает Маг. Атк. на 0.83%', null, 1, false, 'Сапоги Зубея, зубей, боты, сапоги, ботинки', 6, 53, );
        seederAddRecipe( 'Zubei\'s Boots 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает Физ. Защ. на 0.83%<br>Увеличивает HP на 49<br><b>Light</b>:<br>Увеличивает Уклонение на 0.59<br><b>Robe</b>:<br>Увеличивает Маг. Атк. на 0.83%', null, 1, false, 'Сапоги Зубея, зубей, боты, сапоги, ботинки', 6, 53, );
        seederAddRecipe( 'Avadon Boots', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает HP на 49<br><b>Light</b>:<br>Увеличивает Маг. Защ. на 0.83%<br>Увеличивает Грузоподъёмность на 960<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 0.83%', null, 1, false, 'Сапоги Авадона, боты, сапоги, ботинки', 6, 53, );
        seederAddRecipe( 'Avadon Boots 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает HP на 49<br><b>Light</b>:<br>Увеличивает Маг. Защ. на 0.83%<br>Увеличивает Грузоподъёмность на 960<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 0.83%', null, 1, false, 'Сапоги Авадона, боты, сапоги, ботинки', 6, 53, );
        seederAddRecipe( 'Doom Boots', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает HP на 53<br>Увеличивает Объём Лёгких на 33<br><b>Light</b>:<br>Увеличивает Объём Лёгких на 33<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Реген MP на 0.41%<br>Увеличивает Защиту от Отправления на 3<br><b>Robe</b>:<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Объём Лёгких на 33<br>Увеличивает Реген MP на 0.83%', null, 1, false, 'Сапоги Рока, дум, боты, сапоги, ботинки', null, 83 );
        seederAddRecipe( 'Doom Boots 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает HP на 53<br>Увеличивает Объём Лёгких на 33<br><b>Light</b>:<br>Увеличивает Объём Лёгких на 33<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Реген MP на 0.41%<br>Увеличивает Защиту от Отправления на 3<br><b>Robe</b>:<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Объём Лёгких на 33<br>Увеличивает Реген MP на 0.83%', null, 1, false, 'Сапоги Рока, дум, боты, сапоги, ботинки', null, 83 );
        seederAddRecipe( 'Blue Wolf Boots', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Реген HP на 0.83%<br><b>Light</b>:<br>Увеличивает Физ. Защ. на 0.88%<br><b>Robe</b>:<br>Увеличивает MP на 34<br>Увеличивает Реген MP на 0.83%', null, 1, false, 'Сапоги Синего Волка, бв, bw, боты, сапоги, ботинки', null, 83 );
        seederAddRecipe( 'Blue Wolf Boots 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Реген HP на 0.83%<br><b>Light</b>:<br>Увеличивает Физ. Защ. на 0.88%<br><b>Robe</b>:<br>Увеличивает MP на 34<br>Увеличивает Реген MP на 0.83%', null, 1, false, 'Сапоги Синего Волка, бв, bw, боты, сапоги, ботинки', null, 83 );
        seederAddRecipe( 'Dark Crystal Boots', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Эффективность магии, восстанавливающей HP самому себе на 1%<br>Увеличивает Защиту от Паралича на 5<br><b>Light</b>:<br>Увеличивает Скорость Атаки на 0.41%<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Защиту от Паралича на 5<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 1%33<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Защиту от Кансела на 8<br>Увеличивает Защиту от Паралича на 8.33', null, 1, false, 'Сапоги Кристалла Тьмы, dc, дк, боты, сапоги, ботинки', 7, 71, );
        seederAddRecipe( 'Tallum Boots', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Скорость Атаки на 0.83%<br>Увеличивает Грузоподъёмность на 960<br>Увеличивает Защиту от Отправления на 8<br>Увеличивает Защиту от Кровотечений на 8<br><b>Light</b>:<br>Увеличивает Реген MP на 0.83%<br>Увеличивает MP на 37<br>Увеличивает Защиту от Отправления на 8<br>Увеличивает Защиту от Кровотечений на 8<br><b>Robe</b>:<br>Увеличивает Маг. Защ. на 1%33<br>Увеличивает Защиту от Отправления на 13.33<br>Увеличивает Защиту от Кровотечений на 13.33', null, 1, false, 'Сапоги Таллума, боты, сапоги, ботинки', 7, 71, );
        seederAddRecipe( 'Boots of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Физ. Атк. на 0.83%<br>Увеличивает Защиту от Сна на 11.66<br>Увеличивает Защиту от Рута на 11.66<br><b>Light</b>:<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Защиту от Сна на 11.66<br>Увеличивает Защиту от Рута на 11.66<br><b>Robe</b>:<br>Увеличивает Реген MP на 0.41%<br>Увеличивает Маг. Атк. на 0.41%<br>Увеличивает Защиту от Сна на 11.66<br>Увеличивает Защиту от Рута на 11.66', null, 1, false, 'Сапоги Кошмаров, боты, сапоги, ботинки', null, 108 );
        seederAddRecipe( 'Majestic Boots', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Физ. Атк. на 0.62%<br>Увеличивает Точность на 0.47<br>Увеличивает Защиту от Стана на 8.33<br><b>Light</b>:<br>Увеличивает Физ. Атк. на 0.83%<br>Увеличивает MP на 40<br>Увеличивает Грузоподъёмность на 960<br>Увеличивает Защиту от Стана на 8.33<br><b>Robe</b>:<br>Увеличивает MP на 40<br>Увеличивает Реген MP на 1%33<br>Увеличивает Защиту от Стана на 8.33', null, 1, false, 'Сапоги Величия, мж, mj, боты, сапоги, ботинки', null, 108 );
    }

    protected function addArmorUniversalGloves() {
        $categoryId = $this->armorUniversalGlovesCategory->id;
        $imagePath  = 'item/armor/universal/gloves';

        seederAddRecipe( 'Reinforced Mithril Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 39, );
        seederAddRecipe( 'Chain Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 4, 39, );
        seederAddRecipe( 'Karmian Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'кармиан, перчатки, перчи, рукавицы', 4, 39, );
        seederAddRecipe( 'Plated Leather Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'пл, перчатки, перчи, рукавицы', 5, 46, );
        seederAddRecipe( 'Rind Leather Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 50, );
        seederAddRecipe( 'Mithril Gauntlets', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 5, 76, );
        seederAddRecipe( 'Demon\'s Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'перчатки, перчи, рукавицы', 5, 76, );
        seederAddRecipe( 'Theca Leather Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'тека, перчатки, перчи, рукавицы', 5, 85, );
        seederAddRecipe( 'Drake Leather Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, null, 6, 110, );
        seederAddRecipe( 'Full Plate Gauntlets', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'фп, перчатки, перчи, рукавицы', 6, 110, );
        seederAddRecipe( 'Divine Gloves', $imagePath, 0, 'C', $categoryId, 0, '100', null, null, 1, false, 'перчатки, перчи, рукавицы', 6, 110, );
        seederAddRecipe( 'Zubei\'s Gauntlets', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Скорость Атаки на 0.41%<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Защиту от Паралича на 5<br><b>Light</b>:<br>Увеличивает Физ. Защ. на 0.83%<br>Увеличивает HP на 49<br><b>Robe</b>:<br>Увеличивает Уклонение на 0.59', null, 1, false, 'Рукавицы Зубея, зубей, перчатки, перчи, рукавицы', 6, 53, );
        seederAddRecipe( 'Zubei\'s Gauntlets 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает Скорость Атаки на 0.41%<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Защиту от Паралича на 5<br><b>Light</b>:<br>Увеличивает Физ. Защ. на 0.83%<br>Увеличивает HP на 49<br><b>Robe</b>:<br>Увеличивает Уклонение на 0.59', null, 1, false, 'Рукавицы Зубея, зубей, перчатки, перчи, рукавицы', 6, 53, );
        seederAddRecipe( 'Avadon Gloves', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает HP на 49<br><b>Light</b>:<br>Увеличивает Маг. Защ. на 0.83%<br>Увеличивает Грузоподъёмность на 960<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 0.83%', null, 1, false, 'Перчатки Авадона, перчатки, перчи, рукавицы', 6, 53, );
        seederAddRecipe( 'Avadon Gloves 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает HP на 49<br><b>Light</b>:<br>Увеличивает Маг. Защ. на 0.83%<br>Увеличивает Грузоподъёмность на 960<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 0.83%', null, 1, false, 'Перчатки Авадона, перчатки, перчи, рукавицы', 6, 53, );
        seederAddRecipe( 'Blue Wolf Gloves', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Реген HP на 0.83%<br><b>Light</b>:<br>Увеличивает Физ. Защ. на 0.88%<br><b>Robe</b>:<br>Увеличивает MP на 34<br>Увеличивает Реген MP на 0.83%', null, 1, false, 'Перчатки Синего Волка, бв, bw, перчатки, перчи, рукавицы', null, 83 );
        seederAddRecipe( 'Blue Wolf Gloves 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Реген HP на 0.83%<br><b>Light</b>:<br>Увеличивает Физ. Защ. на 0.88%<br><b>Robe</b>:<br>Увеличивает MP на 34<br>Увеличивает Реген MP на 0.83%', null, 1, false, 'Перчатки Синего Волка, бв, bw, перчатки, перчи, рукавицы', null, 83 );
        seederAddRecipe( 'Doom Gloves', $imagePath, 0, 'B', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает HP на 53<br>Увеличивает Объём Лёгких на 33<br><b>Light</b>:<br>Увеличивает Объём Лёгких на 33<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Реген MP на 0.41%<br>Увеличивает Защиту от Отправления на 2<br><b>Robe</b>:<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Объём Лёгких на 33<br>Увеличивает Реген MP на 0.83%', null, 1, false, 'Перчатки Рока, дум, перчатки, перчи, рукавицы', null, 83 );
        seederAddRecipe( 'Doom Gloves 100%', $imagePath, 0, 'B', $categoryId, 0, '100', '<b>Heavy</b>:<br>Увеличивает HP на 53<br>Увеличивает Объём Лёгких на 33<br><b>Light</b>:<br>Увеличивает Объём Лёгких на 33<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Реген MP на 0.41%<br>Увеличивает Защиту от Отправления на 2<br><b>Robe</b>:<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Объём Лёгких на 33<br>Увеличивает Реген MP на 0.83%', null, 1, false, 'Перчатки Рока, дум, перчатки, перчи, рукавицы', null, 83 );
        seederAddRecipe( 'Dark Crystal Gloves', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Эффективность магии, восстанавливающей HP самому себе на 1%<br>Увеличивает Защиту от Паралича на 5<br><b>Light</b>:<br>Увеличивает Скорость Атаки на 0.41%<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Защиту от Паралича на 5<br><b>Robe</b>:<br>Увеличивает Физ. Защ. на 1%33<br>Увеличивает Скорость Бега на 1.16<br>Увеличивает Защиту от Кансела на 8<br>Увеличивает Защиту от Паралича на 8.33', null, 1, false, 'Перчатки Кристалла Тьмы, дк, dc, перчатки, перчи, рукавицы', 7, 71, );
        seederAddRecipe( 'Tallum Gloves', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Скорость Атаки на 0.83%<br>Увеличивает Грузоподъёмность на 960<br>Увеличивает Защиту от Отправления на 8<br>Увеличивает Защиту от Кровотечений на 8<br><b>Light</b>:<br>Увеличивает Реген MP на 0.83%<br>Увеличивает MP на 37<br>Увеличивает Защиту от Отправления на 8<br>Увеличивает Защиту от Кровотечений на 8<br><b>Robe</b>:<br>Увеличивает Маг. Защ. на 1%33<br>Увеличивает Защиту от Отправления на 13.33<br>Увеличивает Защиту от Кровотечений на 13.33', null, 1, false, 'Перчатки Таллума, перчатки, перчи, рукавицы', 7, 71, );
        seederAddRecipe( 'Gauntlets of Nightmare', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Физ. Атк. на 0.83%<br>Увеличивает Защиту от Сна на 11.66<br>Увеличивает Защиту от Рута на 11.66<br><b>Light</b>:<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Защиту от Сна на 11.66<br>Увеличивает Защиту от Рута на 11.66<br><b>Robe</b>:<br>Увеличивает Реген MP на 0.41%<br>Увеличивает Маг. Атк. на 0.41%<br>Увеличивает Защиту от Сна на 11.66<br>Увеличивает Защиту от Рута на 11.66', null, 1, false, 'Рукавицы Кошмаров, перчатки, перчи, рукавицы', null, 108 );
        seederAddRecipe( 'Majestic Gauntlets', $imagePath, 0, 'A', $categoryId, 0, '60', '<b>Heavy</b>:<br>Увеличивает Физ. Атк. на 0.41%<br>Увеличивает Точность на 0.31<br>Увеличивает Защиту от Стана на 8.33<br><b>Light</b>:<br>Увеличивает Физ. Атк. на 0.83%<br>Увеличивает MP на 40<br>Увеличивает Грузоподъёмность на 960<br>Увеличивает Защиту от Стана на 8.33<br><b>Robe</b>:<br>Увеличивает MP на 40<br>Увеличивает Реген MP на 1%33<br>Увеличивает Защиту от Стана на 8.33', null, 1, false, 'Рукавицы Величия, мж, mj, перчатки, перчи, рукавицы', null, 108 );
    }

}
