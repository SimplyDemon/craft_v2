<?php

namespace App\Helpers;

use App\Models\Resource;

class ResourceHelper {
    public Resource $highGradeSuede;
    public Resource $craftedLeather;
    public Resource $syntheticCokes;
    public Resource $mithrilAlloy;
    public Resource $enria;
    public Resource $durableMetalPlate;
    public Resource $adamantine;

    public Resource $warsmithHolder;
    public Resource $artisansFrame;
    public Resource $craftsmanMold;


    public Resource $crystalS;
    public Resource $crystalB;
    public Resource $gemstoneS;
    public Resource $gemstoneB;

    public function __construct() {
        $this->setResources();
    }

    public function setResources() {
        $this->highGradeSuede    = Resource::where( 'name', 'High-grade Suede' )->firstOrFail();
        $this->craftedLeather    = Resource::where( 'name', 'Crafted Leather' )->firstOrFail();
        $this->syntheticCokes    = Resource::where( 'name', 'Synthetic Cokes' )->firstOrFail();
        $this->mithrilAlloy      = Resource::where( 'name', 'Mithril Alloy' )->firstOrFail();
        $this->enria             = Resource::where( 'name', 'Enria' )->firstOrFail();
        $this->durableMetalPlate = Resource::where( 'name', 'Durable Metal Plate' )->firstOrFail();
        $this->adamantine        = Resource::where( 'name', 'Adamantine' )->firstOrFail();

        $this->warsmithHolder = Resource::where( 'name', 'Warsmith Holder' )->firstOrFail();
        $this->artisansFrame  = Resource::where( 'name', 'Artisans Frame' )->firstOrFail();
        $this->craftsmanMold  = Resource::where( 'name', 'Craftsman Mold' )->firstOrFail();

        $this->crystalS  = Resource::where( 'name', 'Crystal S' )->firstOrFail();
        $this->crystalB  = Resource::where( 'name', 'Crystal B' )->firstOrFail();
        $this->gemstoneS = Resource::where( 'name', 'Gemstone (S-grade)' )->firstOrFail();
        $this->gemstoneB = Resource::where( 'name', 'Gemstone (B-grade)' )->firstOrFail();
    }
}
