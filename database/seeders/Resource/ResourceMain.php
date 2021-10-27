<?php

namespace Database\Seeders\Resource;

use Database\Seeders\ResourceSeeder;

abstract class ResourceMain {
    protected array $resources;
    protected ResourceSeeder $resourceSeeder;

    public function __construct() {
        $this->resources      = [];
        $this->resourceSeeder = new ResourceSeeder();
        $this->add();
    }

    public function getResources(): array {
        return $this->resources;
    }

    protected function add() {

    }
}
