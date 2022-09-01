<?php

namespace Database\Seeders\Recipe\NonCraftable;

use App\Models\Category;
use App\Models\Recipe;
use Database\Seeders\NonCraftableRecipesSeeder;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Ramsey\Collection\Collection;

class Jewelry extends NonCraftableRecipesSeeder
{
    protected Category $jewelryNecklaceCategory;
    protected Category $jewelryEarringCategory;
    protected Category $jewelryRingCategory;

    public function seed()
    {
        $this->setJewelryCategories();
        $this->addJewelry();
    }

    protected function addJewelry()
    {
        $this->addJewelryNecklace();
        $this->addJewelryEarring();
        $this->addJewelryRing();
    }


    protected function setJewelryCategories()
    {
        $jewelryCategory = Category::where('name', 'Jewelry')->firstOrFail();

        $this->jewelryNecklaceCategory = Category::where('name', 'Necklace')->where(
            'category_id',
            $jewelryCategory->id
        )->firstOrFail();
        $this->jewelryEarringCategory = Category::where('name', 'Earring')->where(
            'category_id',
            $jewelryCategory->id
        )->firstOrFail();
        $this->jewelryRingCategory = Category::where('name', 'Ring')->where(
            'category_id',
            $jewelryCategory->id
        )->firstOrFail();
    }

    protected function addJewelryNecklace()
    {
        $categoryId = $this->jewelryNecklaceCategory->id;
        $imagePath = 'item/jewelry/necklace';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Olympiad Warrior\'s Necklace',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Оли шея, олимпиада, некля, шея, necklace, Olympiad',
                defenceMagic: 85,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 42<br>Увеличивает вероятность и сопротивление к Слипу/Параличу/Стану на 15%<br>Ускоряет откат скилов на 5%<br>Увеличивает отражение урона на 4%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно получить с сундуков за квесты на Олимпиаде или купить за оли токены. Имеет срок годности 60 дней. Нельзя вставить ЛС или заточить. Не падает при ПК. Является хорошей альтернативой Эпик биже, т.к. имеет 5% откат для физ и маг скилов.</p><!-- /wp:paragraph -->',
                descriptionSeo: 'Olympiad Warrior\'s Necklace характеристики и статы оли ожерелья, является бюджетной альтернативой Эпик бижутерии.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Necklace of Frintezza',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Фринта шея, фринтеза, некля, шея, necklace, Frintezza, epic, эпик, епик',
                defenceMagic: 95,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 42<br>Увеличивает вероятность и сопротивление к Яду/Кровотечению на 25%<br>Увеличивает вероятность и сопротивление к Параличу/Стану/Слипу на 15%<br>Увеличивает сопротивление к Тьме на 15<br>Ускоряет откат скилов на 5%<br>Увеличивает отражение урона на 4%.</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается c <strong>Scarlet van Halisha</strong>, с вероятностью <b>30%</b>, вход в инстанс расположен в <b>Imperial Tomb</b>. Пати лидеру необходимо выполнить квест на проходку и создать цц(командный канал). Не требует Magic Gem.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Necklace of Frintezza характеристики и статы эпик ожерелья Фринты, информация о дропе и входе.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Necklace of Valakas',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Валакаса шея, некля, шея, necklace, Valakas, epic, эпик, епик',
                defenceMagic: 125,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 50<br>Увеличивает вероятность и сопротивление к Слипу на 40%<br>Увеличивает Физ. Атаку на 4%<br>Увеличивает Маг. Атаку на 8%<br>Увеличивает вероятность Маг. Крит. Атаки на 2<br>Увеличивает ХП на 445<br>Увеличивает сопротивление к Огню на 15<br>Ускоряет откат скилов на 10%<br>Увеличивает отражение урона на 5%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается c <strong>Valakas</strong>, с вероятностью <b>100%</b>, вход в логово расположен в <b>Forge of the Gods</b>. Игроку необходимо выполнить квест на проходку для входа.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Necklace of Valakas характеристики и статы эпик ожерелья Валакаса, информация о дропе и входе.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Gludio Water Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Gludio, Глудио, ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Воде на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Gludio</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Dion Holy Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Dion, Дион, ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Святости на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Dion</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Giran Wind Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Giran, Гиран, ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Ветру на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Giran</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Oren Dark Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Oren, Орен, ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Тьме на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Oren</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Aden Earth Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Aden, Аден, ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Земле на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Aden</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Innadril Water Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Innadril, Хейн , ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Воде на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Innadril</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Goddard Fire Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Goddard, Годард, ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Огню на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Goddard</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Rune Fire Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Rune, Руна, ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Огню на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Rune</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Schuttgart Wind Royal Guard Necklace',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Schuttgart, Шутгард, ТВ бижа, territory war, TW, ТВ, некля, шея, necklace',
                defenceMagic: 106,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает сопротивление к Ветру на 30</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Schuttgart</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Necklace of Freya',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Фрея шея, фреи, некля, шея, necklace, Freya, epic, эпик, епик',
                defenceMagic: 125,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 50<br>Увеличивает реген МП на 0.23<br>Увеличивает вероятность и сопротивление к Кровотечению на 20%<br>Увеличивает вероятность и сопротивление к Ментальной Атаке на 10%<br>Увеличивает вероятность и сопротивление к Параличу/Стану/Слипу на 15%<br>Увеличивает сопротивление к Воде на 10<br>Ускоряет откат Маг. Скилов на 5%<br>Увеличивает отражение урона на 4%.</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается c <strong>Freya</strong>, с вероятностью <b>25%</b>, вход в инстанс расположен в <b>Freya\'s Garden</b>. Игроку необходимо выполнить квест на проходку для входа и находиться в цц(командный канал). Требует 4 Magic Gem. Инстанс имеет общее кд с БФреей.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Necklace of Freya характеристики и статы эпик ожерелья Фреи, информация о дропе и входе.',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Blessed Necklace of Freya',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Блесс Фрея шея, фреи, некля, шея, necklace, Blessed Freya, epic, эпик, епик',
                defenceMagic: 132,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 50<br>Увеличивает реген МП на 0.46<br>Увеличивает вероятность и сопротивление к Кровотечению на 25%<br>Увеличивает вероятность и сопротивление к Ментальной Атаке на 10%<br>Увеличивает вероятность и сопротивление к Параличу/Стану/Слипу на 20%<br>Увеличивает сопротивление к Воде на 15<br>Ускоряет откат Маг. Скилов на 5%<br>Уменьшает потребление МП на Маг Скилы на 5%<br>Увеличивает количество получаемого Хила на 15<br>Увеличивает отражение урона на 4%<br> MEN +2<br>CON +1<br>STR -1</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно улучшить <strong>Necklace of Freya</strong> с помощью <strong>Bottle of Freya\'s Soul</strong></p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Blessed Necklace of Freya характеристики и статы эпик ожерелья Блесс Фреи, информация о дропе и входе.',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Necklace',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал шея, некля, шея, necklace',
                crystalsCount: 872,
                defenceMagic: 131,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 51</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Если убить <strong>Zaken</strong> (83 lvl) до 5 минут по таймеру, то с вероятностью <b>50%</b> дадут данный предмет.</p><!-- /wp:paragraph -->',
                descriptionSeo: 'Vorpal Necklace характеристики и статы ворпал ожерелья',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Necklace',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия шея, некля, шея, necklace',
                crystalsCount: 1046,
                defenceMagic: 138,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 52</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выпадает только с <strong>Bless Freya</strong></p><!-- /wp:paragraph -->',
                descriptionSeo: 'Elegia Necklace характеристики и статы элегия ожерелья',
            )
        );
    }

    protected function addJewelryEarring()
    {
        $categoryId = $this->jewelryEarringCategory->id;
        $imagePath = 'item/jewelry/earring';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Olympiad Warrior\'s Earring',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Оли серьга, олимпиада, серьга, earring, Olympiad',
                defenceMagic: 63,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 31<br>Увеличивает вероятность и сопротивление к Стану/Ментальной Атаке на 20%<br>Увеличивает Вампиризм на 4%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно получить с сундуков за квесты на Олимпиаде или купить за оли токены. Имеет срок годности 60 дней. Нельзя вставить ЛС или заточить. Не падает при ПК. Хорошо сочетается с Закен серьгой.</p><!-- /wp:paragraph -->',
                descriptionSeo: 'Olympiad Warrior\'s Earring характеристики и статы оли ожерелья. Своего рода мини Закен, который так же хорошо сочетается с этой серьгой.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Earring of Orfen',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Орфена серьги, epic, эпик, епик, серьга, earring, серьги',
                defenceMagic: 71,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 31<br>Увеличивает вероятность и сопротивление к Кровотечению на 20%<br>Увеличивает количество получаемого Хила на 6%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Считается устаревшей бижутерией и больше не падает с <strong>Orfen</strong>, вместо неё была добавлена улучшенная серьга Орфена.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Earring of Orfen характеристики и статы устаревшей эпик серьги Орфена, информация о дропе и входе.',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Blessed Earring of Orfen',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Блесс Орфена серьги, epic, эпик, епик, серьга, earring, серьги',
                defenceMagic: 71,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 46<br>Увеличивает вероятность и сопротивление к Стану/Слипу на 25%<br>Увеличивает количество получаемого Хила на 10%<br>Уменьшает потребление МП на 5%<br>Увеличивает Вампиризм на 4%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Босс был усилен в сентябре 2022 года и с него падает теперь улучшенная версия серьги.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Blessed Earring of Orfen характеристики и статы новой эпик серьги Орфена, информация о дропе и входе.',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Earring of Zaken',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Закена серьги, epic, эпик, епик, серьга, earring, серьги',
                defenceMagic: 71,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 31<br>Увеличивает вероятность и сопротивление к Кровотечению на 30%<br>Увеличивает вероятность и сопротивление к Стану/Ментальной Атаке на 20%<br>Увеличивает количество получаемого Хила на 10%<br>Увеличивает Вампиризм на 4%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается с ночного <strong>Zaken</strong> (60 lvl), с вероятностью <b>85%</b>, вход в инстанс расположен в <b>Devil\'s Isle</b>. Из-за того, что имеет огромный шанс дропа без конкуренции, с фармом около 10 мин, некоторые игроки качают твинов для заходов и выносят каждую неделю пачки серьг.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Earring of Zaken характеристики и статы эпик серьги Закена, информация о дропе, входе фарме.',

            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Earring of Antharas',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Антараса серьги, epic, эпик, епик, серьга, earring, серьги',
                defenceMagic: 94,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 37<br>Увеличивает вероятность и сопротивление к Кровотечению на 40%<br>Увеличивает вероятность и сопротивление к Стану/Ментальной Атаке на 30%<br>Увеличивает количество получаемого Хила на 10%<br>Увеличивает Вампиризм на 4%<br>Увеличивает сопротивление к Земле на 15<br>Уменьшает потребление МП на 5%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается c <strong>Antharas</strong>, с вероятностью <b>100%</b>, вход в логово расположен в <b>Antharas Lair</b>. Игроку необходимо выполнить квест на проходку для входа.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Earring of Antharas характеристики и статы эпик серьги Антараса, информация о дропе и входе.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Gludio Royal Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Gludio, Глудио, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Стана на 15%<br>Увеличивает сопротивление к Кровотечению на 15%<br>Увеличивает сопротивление к Воде на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Gludio</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Dion Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Dion, Дион, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Рута на 15%<br>Увеличивает сопротивление к Яду на 15%<br>Увеличивает сопротивление к Святости на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Dion</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Giran Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Giran, Гиран, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Кровотечения на 15%<br>Увеличивает сопротивление к Параличу на 15%<br>Увеличивает сопротивление к Ветру на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Giran</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Oren Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Oren, Орен, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Паралича на 15%<br>Увеличивает сопротивление к Рутам на 15%<br>Увеличивает сопротивление к Тьме на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Oren</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Aden Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Aden, Аден, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Ментальной Атаки на 15%<br>Увеличивает сопротивление к Стану на 15%<br>Увеличивает сопротивление к Земле на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Aden</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Innadril Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Innadril, Хейн, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Слипа на 15%<br>Увеличивает сопротивление к Стану на 15%<br>Увеличивает сопротивление к Воде на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Innadril</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Goddard Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Goddard, Годард, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Стана на 15%<br>Увеличивает сопротивление к Слипу на 15%<br>Увеличивает сопротивление к Огню на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Goddard</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Rune Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Rune, Руна, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Яда на 15%<br>Увеличивает сопротивление к Руту на 15%<br>Увеличивает сопротивление к Огню на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Rune</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Schuttgart Guard Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Schuttgart, Шутгард, ТВ бижа, territory war, TW, ТВ, серьга, earring, серьги',
                defenceMagic: 79,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 35<br>Увеличивает вероятность Рута на 15%<br>Увеличивает сопротивление к Ментальной Атаке на 15%<br>Увеличивает сопротивление к Ветру на 10<br>Увеличивает CP на 5%<br></p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Schuttgart</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Blessed Earring of Zaken',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Блес Закена серьги, epic, эпик, епик, серьга, earring, серьги',
                defenceMagic: 94,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 37<br>Увеличивает вероятность и сопротивление к Кровотечению/Стану/Ментальной Атаке на 30%<br>Увеличивает количество получаемого Хила на 15%<br>Увеличивает Вампиризм на 4%<br>Увеличивает сопротивление к Тьме на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается с <strong>Zaken</strong> (83 lvl), с вероятностью <b>0.09%</b>, вход в инстанс расположен в <b>Devil\'s Isle</b>. Требует 3 Magic Gem.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Blessed Earring of Zaken характеристики и статы эпик серьги Блесс Закена, информация о дропе и входе.',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Baylor\'s Earring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Байлора серьги, серьга, earring, серьги',
                crystalsCount: 654,
                defenceMagic: 98,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 31<br>Увеличивает сопротивление к Тьме на 30</p><!-- /wp:paragraph -->',
                descriptionSeo: 'Baylor характеристики серьги Блесс Байлора.',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Earring',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал серьги, серьга, earring, серьги',
                crystalsCount: 654,
                defenceMagic: 98,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 38</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Если убить <strong>Zaken</strong> (83 lvl) от 5 до 10 минут по таймеру, то с вероятностью <b>30%</b> дадут данный предмет.</p><!-- /wp:paragraph -->',
                descriptionSeo: 'Vorpal Earring характеристики и статы серьги Ворпал, информация о дропе.',
            )
        );

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Earring',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия серьги, серьга, earring, серьги',
                crystalsCount: 785,
                defenceMagic: 104,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 39</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выпадает только с <strong>Bless Freya</strong></p><!-- /wp:paragraph -->',
                descriptionSeo: 'Elegia Earring характеристики и статы серьги Элегии, информация о дропе.',
            )
        );
    }

    protected function addJewelryRing()
    {
        $categoryId = $this->jewelryRingCategory->id;
        $imagePath = 'item/jewelry/ring';

        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Olympiad Warrior\'s Ring',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Оли кольцо, олимпиада, серьга, ring, Olympiad',
                defenceMagic: 42,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 21<br>Увеличивает вероятность и сопротивление к Руту на 30%<br>Увеличивает Точность на 2<br>Увеличивает мощь Крит Удара на 15%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно получить с сундуков за квесты на Олимпиаде или купить за оли токены. Имеет срок годности 60 дней. Нельзя вставить ЛС или заточить. Не падает при ПК. Является самой желаемой оли бижутерией, т.к. даёт 15% мощи крита.</p><!-- /wp:paragraph -->',
                descriptionSeo: 'Olympiad Warrior\'s Ring характеристики и статы оли кольца. Единственная оли бижа, которая даёт значимый прирост урона, должен быть у всех ДД.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Ring of Queen Ant',
                $imagePath,
                0,
                'B',
                $categoryId,
                keywords: 'АК кольцо, epic, эпик, епик, кольцо, палец, ring',
                defenceMagic: 48,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 21<br>Увеличивает вероятность и сопротивление к Отравлению на 30%<br>Увеличивает вероятность и сопротивление к Руту на 20%<br>Увеличивает Точность на 2<br>Увеличивает мощь Крит Удара на 15%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается с <strong>Queen Ant</strong>, с вероятностью <b>30%</b>, вход к боссу расположен в <b>The Ant Nest</b>.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Ring of Queen An характеристики и статы эпик кольца Ант Квин, информация о дропе и входе.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Ring of Core',
                $imagePath,
                0,
                'A',
                $categoryId,
                keywords: 'Коре кольцо, epic, эпик, епик, кольцо, палец, ring',
                defenceMagic: 48,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 21<br>Увеличивает вероятность и сопротивление к Отравлению на 20%<br>Увеличивает Точность на 1</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается с <strong>Core</strong>, с вероятностью <b>30%</b>, вход к боссу расположен в <b>Cruma Tower</b>.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Ring of Core характеристики и статы эпик кольца Коре, информация о дропе и входе.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Ring of Baium',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Баюма кольцо, epic, эпик, епик, кольцо, палец, ring',
                defenceMagic: 48,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 21<br>Увеличивает вероятность и сопротивление к Отравлению на 40%<br>Увеличивает вероятность и сопротивление к Руту на 30%<br>Увеличивает Точность на 2<br>Увеличивает мощь Крит Удара на 15%<br> Увеличивает Скорость Физ. Атаки и Скорость Маг. Атаки на 4%</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выбивается с <strong>Baium</strong>, с вероятностью <b>100%</b>, вход к боссу расположен в <b>Tower of Insolence. Игроку необходимо выполнить квест на проходку для входа</b>.</p><!-- /wp:paragraph -->',
                isEpic: true,
                descriptionSeo: 'Ring of Baium характеристики и статы эпик кольца Баюма, информация о дропе и входе.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Ring of Beleth',
                $imagePath,
                0,
                'S',
                $categoryId,
                keywords: 'Белефа кольцо, кольцо, палец, ring',
                crystalsCount: 436,
                defenceMagic: 48,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 38<br>Увеличивает Маг Защиту на 12%<br>Увеличивает вероятность и сопротивление к Ментальной Атаке на 10%<br>Увеличивает сопротивление к Тьме на 30<br>Увеличивает ХП на 105<br>Увеличивает реген МП на 0.23</p><!-- /wp:paragraph -->',
                descriptionSeo: 'Ring of Beleth характеристики и статы кольца Белефа.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Gludio Earth Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Gludio, , ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Земле на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Gludio</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Dion Water Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Dion, Дион, ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Воде на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Dion</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Giran Fire Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Giran, Гиран, ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Огню на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Giran</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Oren Earth Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Oren, Орен, ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Земле на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Oren</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Aden Holy Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Aden, Аден, ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Святости на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Aden</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Innadril Holy Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Innadril, Хейн, ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Святости на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Innadril</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Goddard Dark Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Goddard, Годард, ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Тьме на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Goddard</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Rune Wind Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Rune, Руна, ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Ветру на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Rune</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Schuttgart Dark Royal Guard Ring',
                $imagePath,
                0,
                'S-80',
                $categoryId,
                keywords: 'Schuttgart, Шутгард, ТВ бижа, territory war, TW, ТВ, кольцо, палец, ring',
                defenceMagic: 60,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 23<br>Увеличивает сопротивление к Тьме на 15</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Можно приобрести за ТВ баджи города <strong>Schuttgart</strong>. Нельзя обменивать/выкидывать. Не падает при ПК. Можно точить.</p><!-- /wp:paragraph -->',
                isTw: true,
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Vorpal Ring',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Ворпал кольцо, кольцо, палец, ring',
                crystalsCount: 436,
                defenceMagic: 65,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 26</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Если убить <strong>Zaken</strong> (83 lvl) от 10 до 15 минут по таймеру, то с вероятностью <b>25%</b> дадут данный предмет.</p><!-- /wp:paragraph -->',
                descriptionSeo: 'Vorpal Ring характеристики и статы кольца Ворпал, информация о дропе и входе.',
            )
        );
        $this->addedRecipesCollection->push(
            seederAddRecipe(
                'Elegia Ring',
                $imagePath,
                0,
                'S-84',
                $categoryId,
                keywords: 'Элегия кольцо, кольцо, палец, ring',
                crystalsCount: 523,
                defenceMagic: 69,
                isNonCraftable: true,
                description: '<!-- wp:paragraph --><p>Увеличивает МП на 27</p><!-- /wp:paragraph -->',
                content: '<!-- wp:paragraph --><p>Выпадает только с <strong>Bless Freya</strong></p><!-- /wp:paragraph -->',
                descriptionSeo: 'Elegia Ring характеристики и статы эпик ожерелья Элегии, информация о дропе.',
            )
        );
    }

}
