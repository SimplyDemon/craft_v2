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
    public Resource $coarseBonePowder;
    public Resource $compoundBraid;
    public Resource $oriharukon;
    public Resource $metallicFiber;
    public Resource $asofe;
    public Resource $orichalcum;
    public Resource $varnishOfPurity;
    public Resource $thons;
    public Resource $leonard;
    public Resource $spiritOre;
    public Resource $soulOre;

    public Resource $warsmithHolder;
    public Resource $artisansFrame;
    public Resource $craftsmanMold;
    public Resource $arcsmithAnvil;
    public Resource $reorinsMold;
    public Resource $warsmithMold;
    public Resource $maestroMold;
    public Resource $blacksmithFrame;

    public Resource $crystalS;
    public Resource $crystalA;
    public Resource $crystalB;
    public Resource $crystalC;
    public Resource $crystalD;
    public Resource $gemstoneB;
    public Resource $gemstoneA;
    public Resource $gemstoneS;

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
        $this->coarseBonePowder  = Resource::where( 'name', 'Coarse Bone Powder' )->firstOrFail();
        $this->compoundBraid     = Resource::where( 'name', 'Compound Braid' )->firstOrFail();
        $this->oriharukon        = Resource::where( 'name', 'Oriharukon' )->firstOrFail();
        $this->metallicFiber     = Resource::where( 'name', 'Metallic Fiber' )->firstOrFail();
        $this->asofe             = Resource::where( 'name', 'Asofe' )->firstOrFail();
        $this->orichalcum        = Resource::where( 'name', 'Orichalcum' )->firstOrFail();
        $this->varnishOfPurity   = Resource::where( 'name', 'Varnish of Purity' )->firstOrFail();
        $this->thons             = Resource::where( 'name', 'Thons' )->firstOrFail();
        $this->leonard           = Resource::where( 'name', 'Leonard' )->firstOrFail();
        $this->spiritOre         = Resource::where( 'name', 'Spirit Ore' )->firstOrFail();
        $this->soulOre           = Resource::where( 'name', 'Soul Ore' )->firstOrFail();

        $this->warsmithHolder  = Resource::where( 'name', 'Warsmith Holder' )->firstOrFail();
        $this->artisansFrame   = Resource::where( 'name', 'Artisans Frame' )->firstOrFail();
        $this->craftsmanMold   = Resource::where( 'name', 'Craftsman Mold' )->firstOrFail();
        $this->arcsmithAnvil   = Resource::where( 'name', 'Arcsmith Anvil' )->firstOrFail();
        $this->reorinsMold     = Resource::where( 'name', 'Reorins Mold' )->firstOrFail();
        $this->warsmithMold    = Resource::where( 'name', 'Warsmith Mold' )->firstOrFail();
        $this->maestroMold     = Resource::where( 'name', 'Maestro Mold' )->firstOrFail();
        $this->blacksmithFrame = Resource::where( 'name', 'Blacksmith Frame' )->firstOrFail();

        $this->crystalS  = Resource::where( 'name', 'Crystal S' )->firstOrFail();
        $this->crystalA  = Resource::where( 'name', 'Crystal A' )->firstOrFail();
        $this->crystalB  = Resource::where( 'name', 'Crystal B' )->firstOrFail();
        $this->crystalC  = Resource::where( 'name', 'Crystal C' )->firstOrFail();
        $this->crystalD  = Resource::where( 'name', 'Crystal D' )->firstOrFail();
        $this->gemstoneB = Resource::where( 'name', 'Gemstone (B-grade)' )->firstOrFail();
        $this->gemstoneA = Resource::where( 'name', 'Gemstone (A-grade)' )->firstOrFail();
        $this->gemstoneS = Resource::where( 'name', 'Gemstone (S-grade)' )->firstOrFail();
    }
}
