<?php

namespace App\Strategy;

use App\Model\Item;
use App\Interface\QualityStrategyInterface;

class BackstagePassStrategy implements QualityStrategyInterface
{
    public function update(Item $item): void
    {
        $item->sell_in--;

        $item->quality = ($item->sell_in < 0)
            ? 0
            : min(50, $item->quality + $this->getQualityIncrease($item->sell_in));
    }

    private function getQualityIncrease(int $sellIn): int
    {
        return match (true) {
            $sellIn < 0  => 0,
            $sellIn < 5  => 3,
            $sellIn < 10 => 2,
            default      => 1,
        };
    }
}
