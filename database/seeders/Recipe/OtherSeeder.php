<?php

namespace Database\Seeders\Recipe;

use App\Models\Category;
use Illuminate\Database\Seeder;

class OtherSeeder extends Seeder {
    protected Category $otherCategory;
    protected string $imagePath = 'other';

    public function seed() {
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
        seederAddRecipe( 'Soulshot (D-grade)', $this->imagePath, 11, 'D', $this->otherCategory->id, 0, '100', null, null, 468, false, 'Заряд Души: Ранг D, ssd' );
        seederAddRecipe( 'Soulshot (C-grade)', $this->imagePath, 12, 'C', $this->otherCategory->id, 0, '100', null, null, 952, false, 'Заряд Души: Ранг C, ssc' );
        seederAddRecipe( 'Soulshot (B-grade)', $this->imagePath, 67, 'B', $this->otherCategory->id, 0, '100', null, null, 450, false, 'Заряд Души: Ранг B, ssb' );
        seederAddRecipe( 'Soulshot (A-grade)', $this->imagePath, 102, 'A', $this->otherCategory->id, 0, '100', null, null, 300, false, 'Заряд Души: Ранг A, ssa' );
        seederAddRecipe( 'Soulshot (S-grade)', $this->imagePath, 107, 'S', $this->otherCategory->id, 0, '100', null, null, 350, false, 'Заряд Души: Ранг S, sss' );
    }

    protected function addSpiritshots() {
        seederAddRecipe( 'Blessed Spiritshot (D-grade)', $this->imagePath, 56, 'D', $this->otherCategory->id, 0, '100', null, null, 100, false, 'Благословенный Заряд Духа: Ранг D, bssd' );
        seederAddRecipe( 'Blessed Spiritshot (C-grade)', $this->imagePath, 117, 'C', $this->otherCategory->id, 0, '100', null, null, 200, false, 'Благословенный Заряд Духа: Ранг C, bssc' );
        seederAddRecipe( 'Blessed Spiritshot (B-grade)', $this->imagePath, 391, 'B', $this->otherCategory->id, 0, '100', null, null, 100, false, 'Благословенный Заряд Духа: Ранг B, bssb' );
        seederAddRecipe( 'Blessed Spiritshot (A-grade)', $this->imagePath, 390, 'A', $this->otherCategory->id, 0, '100', null, null, 200, false, 'Благословенный Заряд Духа: Ранг A, bssa' );
        seederAddRecipe( 'Blessed Spiritshot (S-grade)', $this->imagePath, 354, 'S', $this->otherCategory->id, 0, '100', null, null, 200, false, 'Благословенный Заряд Духа: Ранг S, bsss' );
    }
}
