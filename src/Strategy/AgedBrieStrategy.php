<?php

namespace App\Strategy;

use App\Model\Item;
use App\Interface\QualityStrategyInterface;

class AgedBrieStrategy implements QualityStrategyInterface
{
    public function update(Item $item): void
    {
        $item->sell_in--;

        $increment = $item->sell_in < 0 ? 2 : 1;
        $item->quality = min(50, $item->quality + $increment);
    }
}
