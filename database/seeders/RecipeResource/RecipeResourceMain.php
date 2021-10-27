<?php

namespace Database\Seeders\RecipeResource;

use App\Helpers\ResourceHelper;
use App\Models\Category;

abstract class RecipeResourceMain {
    protected Category $category;
    protected ResourceHelper $ResourceHelper;

    public function seed() {
        $this->ResourceHelper = new ResourceHelper();
        $this->setCategory();
        $this->add();
    }


    protected function setCategory() {

    }

    protected function add() {

    }
}
