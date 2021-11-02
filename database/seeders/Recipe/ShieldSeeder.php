<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ShieldSeeder extends Seeder {
    protected Category $shieldCategory;

    public function seedShield() {
        $this->setShieldCategories();
        $this->addShield();
    }

    protected function addShield() {
        $categoryId = $this->shieldCategory->id;
        $imagePath  = 'item/shield';

        seederAddRecipe( 'Imperial Crusader Shield', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Dynasty Shield', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Multiplies M.Def by 1.02' );
        seederAddRecipe( 'Moirai Shield', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
        seederAddRecipe( 'Vesper Shield', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
    }


    protected function setShieldCategories() {
        $this->shieldCategory = Category::where( 'name', 'Shield' )->firstOrFail();

    }
}
