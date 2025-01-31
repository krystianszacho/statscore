<?php

namespace App\Service;

use App\Model\Item;
use App\Factory\QualityStrategyFactory;

class GildedRose
{
    public function updateQuality(Item $item): void
    {
        $strategy = QualityStrategyFactory::create($item);
        $strategy->update($item);
    }
}
