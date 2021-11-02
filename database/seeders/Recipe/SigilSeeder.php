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

        seederAddRecipe( 'Arcana Sigil', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Increases M. Def by 2% and decreases magic canceling damage by 13.' );
        seederAddRecipe( 'Dynasty Sigil', $imagePath, 100000000, 'S', $categoryId, 0, '60', 'Increases M. Def by 2% and Resistance to Dark by 2.' );
        seederAddRecipe( 'Moirai Sigil', $imagePath, 100000000, 'S-80', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
        seederAddRecipe( 'Vesper Sigil', $imagePath, 100000000, 'S-84', $categoryId, 0, '60', 'Multiplies Magic Damage Vulnerability by 0.98' );
    }


    protected function setSigilCategories() {
        $this->sigilCategory = Category::where( 'name', 'Sigil' )->firstOrFail();
    }
}
