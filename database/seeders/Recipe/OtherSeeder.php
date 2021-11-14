<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class OtherSeeder extends Seeder {
    protected Category $otherCategory;
    protected string $imagePath = 'other';

    public function seedOther() {
        $this->setOtherCategories();
        $this->addOther();
    }


    protected function setOtherCategories() {
        $this->otherCategory = Category::where( 'name', 'Other' )->firstOrFail();
    }

    protected function addOther() {
        $this->addSoulhots();
        $this->addSpiritshots();

    }

    protected function addSoulhots() {
        seederAddRecipe( 'Soulshot (D-grade)', $this->imagePath, 0, 'D', $this->otherCategory->id, 0, '100', null, null, 468 );
        seederAddRecipe( 'Soulshot (C-grade)', $this->imagePath, 0, 'C', $this->otherCategory->id, 0, '100', null, null, 952 );
        seederAddRecipe( 'Soulshot (B-grade)', $this->imagePath, 0, 'B', $this->otherCategory->id, 0, '100', null, null, 450 );
        seederAddRecipe( 'Soulshot (A-grade)', $this->imagePath, 0, 'A', $this->otherCategory->id, 0, '100', null, null, 300 );
        seederAddRecipe( 'Soulshot (S-grade)', $this->imagePath, 0, 'S', $this->otherCategory->id, 0, '100', null, null, 350 );
    }

    protected function addSpiritshots() {
        seederAddRecipe( 'Blessed Spiritshot (D-grade)', $this->imagePath, 0, 'D', $this->otherCategory->id, 0, '100', null, null, 100 );
        seederAddRecipe( 'Blessed Spiritshot (C-grade)', $this->imagePath, 0, 'C', $this->otherCategory->id, 0, '100', null, null, 200 );
        seederAddRecipe( 'Blessed Spiritshot (B-grade)', $this->imagePath, 0, 'B', $this->otherCategory->id, 0, '100', null, null, 100 );
        seederAddRecipe( 'Blessed Spiritshot (A-grade)', $this->imagePath, 0, 'A', $this->otherCategory->id, 0, '100', null, null, 200 );
        seederAddRecipe( 'Blessed Spiritshot (S-grade)', $this->imagePath, 0, 'S', $this->otherCategory->id, 0, '100', null, null, 200 );

    }

}
