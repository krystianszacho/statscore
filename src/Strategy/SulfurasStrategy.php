<?php

namespace App\Strategy;

use App\Model\Item;
use App\Interface\QualityStrategyInterface;

class SulfurasStrategy implements QualityStrategyInterface
{
    public function update(Item $item): void
    {
        // Sulfuras does not change in quality or sell_in, maybe we use this class in the future
    }
}
