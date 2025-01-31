<?php

namespace App\Strategy;

use App\Model\Item;
use App\Interface\QualityStrategyInterface;

class BackstagePassStrategy implements QualityStrategyInterface
{
    public function update(Item $item): void
    {
        $item->sell_in--;

        if ($item->sell_in < 0) {
            $item->quality = 0;
            return;
        }

        $increment = 1;
        if ($item->sell_in < 5) {
            $increment = 3;
        } elseif ($item->sell_in < 10) {
            $increment = 2;
        }

        $item->quality = min(50, $item->quality + $increment);
    }
}
