<?php

namespace App\Strategy;

use App\Model\Item;
use App\Interface\QualityStrategyInterface;

class StandardItemStrategy implements QualityStrategyInterface
{
    public function update(Item $item): void
    {
        $item->sell_in--;

        $degradationRate = $item->sell_in < 0 ? 2 : 1;
        $item->quality = max(0, $item->quality - $degradationRate);
    }
}
