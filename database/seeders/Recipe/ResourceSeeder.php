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
        seederAddRecipe( 'High-grade Suede', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Crafted Leather', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Synthetic Cokes', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Mithril Alloy', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Durable Metal Plate', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Coarse Bone Powder', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Compound Braid', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Oriharukon', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Metallic Fiber', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Varnish of Purity', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Steel', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Cokes', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Leather', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Cord', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Metallic Thread', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Braided Hemp', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );

        seederAddRecipe( 'Warsmith Holder', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Artisan\'s Frame', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Craftsman Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Arcsmith\' Anvil', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Reorin\'s Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Warsmith\' Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Maestro Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Blacksmith\' Frame', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Maestro Anvil Lock', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Silver Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Maestro Holder', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
        seederAddRecipe( 'Steel Mold', $this->imagePath, 0, 'none', $this->resourceCategory->id, 0, '100', null, null, 1, true );
    }
}
