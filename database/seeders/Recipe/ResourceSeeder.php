<?php

namespace Database\Seeders\Recipe;

use App\Helpers\ResourceHelper;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder {
    protected Category $resourceCategory;
    protected string $imagePath = 'resource';

    public function seed() {
        $this->setResourceCategories();
        $this->addResource();
    }

    protected function setResourceCategories() {
        $this->resourceCategory = Category::where( 'name', 'Resource' )->firstOrFail();
    }

    protected function addResource() {
        $this->addCraftableResources();
    }

    protected function addCraftableResources() {
	    seederAddRecipe( 'High-grade Suede', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Качественная Замша' );
	    seederAddRecipe( 'Crafted Leather', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Выделанная Кожа, cl' );
	    seederAddRecipe( 'Synthetic Cokes', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Синтетический Кокс' );
	    seederAddRecipe( 'Mithril Alloy', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Мифриловый Сплав, ма, ma' );
	    seederAddRecipe( 'Durable Metal Plate', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Прочный Лист Стали, dmp, дмп' );
	    seederAddRecipe( 'Coarse Bone Powder', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Грубый Костный Порошок, кбп, cpb' );
	    seederAddRecipe( 'Compound Braid', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Прочный Шнурок' );
	    seederAddRecipe( 'Oriharukon', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Орихарукон' );
	    seederAddRecipe( 'Metallic Fiber', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Металлическое Волокно' );
	    seederAddRecipe( 'Varnish of Purity', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Очищенный Лак, vop, воп' );
	    seederAddRecipe( 'Steel', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Сталь' );
	    seederAddRecipe( 'Cokes', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Кокс' );
	    seederAddRecipe( 'Leather', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Кожа' );
	    seederAddRecipe( 'Cord', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Веревка' );
	    seederAddRecipe( 'Metallic Thread', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Металлическая Нить' );
	    seederAddRecipe( 'Braided Hemp', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Плетеный Лен' );

	    seederAddRecipe( 'Warsmith Holder', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Рукоять Кузнеца' );
	    seederAddRecipe( 'Artisan\'s Frame', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Заготовка Ремесленника' );
	    seederAddRecipe( 'Craftsman Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Заготовка Работника' );
	    seederAddRecipe( 'Arcsmith\' Anvil', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Наковальня Кузнеца' );
	    seederAddRecipe( 'Reorin\'s Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Заготовка Реорина' );
	    seederAddRecipe( 'Warsmith\' Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Заготовка Оружейника' );
	    seederAddRecipe( 'Maestro Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Заготовка Мастера' );
	    seederAddRecipe( 'Blacksmith\' Frame', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Заготовка Кузнеца' );
	    seederAddRecipe( 'Maestro Anvil Lock', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Замок Мастера' );
	    seederAddRecipe( 'Silver Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Серебряная Заготовка' );
	    seederAddRecipe( 'Maestro Holder', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Рукоять Мастера' );
	    seederAddRecipe( 'Steel Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true, 'Стальная Заготовка' );
    }
}
