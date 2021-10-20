<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class SigilSeeder extends Seeder {
    protected Category $sigilCategory;

    public function seedSigil() {
        $this->setSigilCategories();
        $this->addSigil();
    }

    protected function addSigil() {
        $categoryId = $this->sigilCategory->id;
        $imagePath  = 'item/sigil';

        seederAddRecipe( 'Arcana Sigil', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Dynasty Sigil', $imagePath, 100000000, 'S', $categoryId );
        seederAddRecipe( 'Moirai Sigil', $imagePath, 100000000, 'S-80', $categoryId );
        seederAddRecipe( 'Vesper Sigil', $imagePath, 100000000, 'S-84', $categoryId );
    }


    protected function setSigilCategories() {
        $this->sigilCategory = Category::where( 'name', 'Sigil' )->firstOrFail();
    }
}
