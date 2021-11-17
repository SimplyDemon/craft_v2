<?php

namespace App\Helpers;

use App\Models\Resource;

class ResourceHelper {
    public Resource $highGradeSuede;
    public Resource $craftedLeather;
    public Resource $syntheticCokes;
    public Resource $mithrilAlloy;
    public Resource $durableMetalPlate;
    public Resource $coarseBonePowder;
    public Resource $compoundBraid;
    public Resource $oriharukon;
    public Resource $metallicFiber;
    public Resource $orichalcum;
    public Resource $varnishOfPurity;
    public Resource $steel;
    public Resource $cokes;
    public Resource $leather;
    public Resource $cord;
    public Resource $metallicThread;
    public Resource $braidedHemp;

    public Resource $enria;
    public Resource $adamantine;
    public Resource $asofe;
    public Resource $thons;
    public Resource $leonard;
    public Resource $silverNugget;
    public Resource $oriharukonOre;
    public Resource $coal;
    public Resource $charcoal;
    public Resource $suede;
    public Resource $animalBone;
    public Resource $animalSkin;
    public Resource $thread;
    public Resource $ironOre;
    public Resource $varnish;
    public Resource $stoneOfPurity;
    public Resource $stem;
    public Resource $mithrilOre;
    public Resource $moldGlue;
    public Resource $moldLubricant;
    public Resource $moldHardener;
    public Resource $adamantiteNugget;

    public Resource $warsmithHolder;
    public Resource $artisansFrame;
    public Resource $craftsmanMold;
    public Resource $arcsmithAnvil;
    public Resource $reorinsMold;
    public Resource $warsmithMold;
    public Resource $maestroMold;
    public Resource $blacksmithFrame;
    public Resource $maestroAnvilLock;
    public Resource $silverMold;
    public Resource $maestroHolder;
    public Resource $steelMold;

    public Resource $crystalS;
    public Resource $crystalA;
    public Resource $crystalB;
    public Resource $crystalC;
    public Resource $crystalD;
    public Resource $gemstoneB;
    public Resource $gemstoneA;
    public Resource $gemstoneS;
    public Resource $spiritOre;
    public Resource $soulOre;

    public function __construct() {
        $this->setResources();
    }

    public function setResources() {
        $this->highGradeSuede    = Resource::where( 'name', 'High-grade Suede' )->firstOrFail();
        $this->craftedLeather    = Resource::where( 'name', 'Crafted Leather' )->firstOrFail();
        $this->syntheticCokes    = Resource::where( 'name', 'Synthetic Cokes' )->firstOrFail();
        $this->mithrilAlloy      = Resource::where( 'name', 'Mithril Alloy' )->firstOrFail();
        $this->durableMetalPlate = Resource::where( 'name', 'Durable Metal Plate' )->firstOrFail();
        $this->coarseBonePowder  = Resource::where( 'name', 'Coarse Bone Powder' )->firstOrFail();
        $this->compoundBraid     = Resource::where( 'name', 'Compound Braid' )->firstOrFail();
        $this->oriharukon        = Resource::where( 'name', 'Oriharukon' )->firstOrFail();
        $this->metallicFiber     = Resource::where( 'name', 'Metallic Fiber' )->firstOrFail();
        $this->varnishOfPurity   = Resource::where( 'name', 'Varnish of Purity' )->firstOrFail();
        $this->steel             = Resource::where( 'name', 'Steel' )->firstOrFail();
        $this->cokes             = Resource::where( 'name', 'Cokes' )->firstOrFail();
        $this->leather           = Resource::where( 'name', 'Leather' )->firstOrFail();
        $this->cord              = Resource::where( 'name', 'Cord' )->firstOrFail();
        $this->metallicThread    = Resource::where( 'name', 'Metallic Thread' )->firstOrFail();
        $this->braidedHemp       = Resource::where( 'name', 'Braided Hemp' )->firstOrFail();

        $this->leonard          = Resource::where( 'name', 'Leonard' )->firstOrFail();
        $this->enria            = Resource::where( 'name', 'Enria' )->firstOrFail();
        $this->adamantine       = Resource::where( 'name', 'Adamantine' )->firstOrFail();
        $this->asofe            = Resource::where( 'name', 'Asofe' )->firstOrFail();
        $this->silverNugget     = Resource::where( 'name', 'Silver Nugget' )->firstOrFail();
        $this->oriharukonOre    = Resource::where( 'name', 'Oriharukon Ore' )->firstOrFail();
        $this->coal             = Resource::where( 'name', 'Coal' )->firstOrFail();
        $this->charcoal         = Resource::where( 'name', 'Charcoal' )->firstOrFail();
        $this->suede            = Resource::where( 'name', 'Suede' )->firstOrFail();
        $this->animalBone       = Resource::where( 'name', 'Animal Bone' )->firstOrFail();
        $this->animalSkin       = Resource::where( 'name', 'Animal Skin' )->firstOrFail();
        $this->thread           = Resource::where( 'name', 'Thread' )->firstOrFail();
        $this->ironOre          = Resource::where( 'name', 'Iron Ore' )->firstOrFail();
        $this->varnish          = Resource::where( 'name', 'Varnish' )->firstOrFail();
        $this->stoneOfPurity    = Resource::where( 'name', 'Stone of Purity' )->firstOrFail();
        $this->stem             = Resource::where( 'name', 'Stem' )->firstOrFail();
        $this->orichalcum       = Resource::where( 'name', 'Orichalcum' )->firstOrFail();
        $this->mithrilOre       = Resource::where( 'name', 'Mithril Ore' )->firstOrFail();
        $this->moldGlue         = Resource::where( 'name', 'Mold Glue' )->firstOrFail();
        $this->moldLubricant    = Resource::where( 'name', 'Mold Lubricant' )->firstOrFail();
        $this->moldHardener     = Resource::where( 'name', 'Mold Hardener' )->firstOrFail();
        $this->thons            = Resource::where( 'name', 'Thons' )->firstOrFail();
        $this->adamantiteNugget = Resource::where( 'name', 'Adamantite Nugget' )->firstOrFail();

        $this->warsmithHolder   = Resource::where( 'name', 'Warsmith Holder' )->firstOrFail();
        $this->artisansFrame    = Resource::where( 'name', 'Artisans Frame' )->firstOrFail();
        $this->craftsmanMold    = Resource::where( 'name', 'Craftsman Mold' )->firstOrFail();
        $this->arcsmithAnvil    = Resource::where( 'name', 'Arcsmith Anvil' )->firstOrFail();
        $this->reorinsMold      = Resource::where( 'name', 'Reorins Mold' )->firstOrFail();
        $this->warsmithMold     = Resource::where( 'name', 'Warsmith Mold' )->firstOrFail();
        $this->maestroMold      = Resource::where( 'name', 'Maestro Mold' )->firstOrFail();
        $this->blacksmithFrame  = Resource::where( 'name', 'Blacksmith Frame' )->firstOrFail();
        $this->maestroAnvilLock = Resource::where( 'name', 'Maestro Anvil Lock' )->firstOrFail();
        $this->silverMold       = Resource::where( 'name', 'Silver Mold' )->firstOrFail();
        $this->maestroHolder    = Resource::where( 'name', 'Maestro Holder' )->firstOrFail();
        $this->steelMold        = Resource::where( 'name', 'Steel Mold' )->firstOrFail();

        $this->crystalS  = Resource::where( 'name', 'Crystal S' )->firstOrFail();
        $this->crystalA  = Resource::where( 'name', 'Crystal A' )->firstOrFail();
        $this->crystalB  = Resource::where( 'name', 'Crystal B' )->firstOrFail();
        $this->crystalC  = Resource::where( 'name', 'Crystal C' )->firstOrFail();
        $this->crystalD  = Resource::where( 'name', 'Crystal D' )->firstOrFail();
        $this->gemstoneA = Resource::where( 'name', 'Gemstone (A-grade)' )->firstOrFail();
        $this->gemstoneB = Resource::where( 'name', 'Gemstone (B-grade)' )->firstOrFail();
        $this->gemstoneS = Resource::where( 'name', 'Gemstone (S-grade)' )->firstOrFail();
        $this->spiritOre = Resource::where( 'name', 'Spirit Ore' )->firstOrFail();
        $this->soulOre   = Resource::where( 'name', 'Soul Ore' )->firstOrFail();
    }
}
