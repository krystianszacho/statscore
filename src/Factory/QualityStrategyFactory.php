<?php

namespace App\Factory;

use App\Model\Item;
use App\Strategy\{
    AgedBrieStrategy,
    BackstagePassStrategy,
    StandardItemStrategy,
    SulfurasStrategy
};
use App\Interface\QualityStrategyInterface;

class QualityStrategyFactory
{
    public static function create(Item $item): QualityStrategyInterface
    {
        return match (true) {
            str_starts_with($item->name, 'Aged Brie') => new AgedBrieStrategy(),
            str_starts_with($item->name, 'Backstage passes') => new BackstagePassStrategy(),
            str_starts_with($item->name, 'Sulfuras') => new SulfurasStrategy(),
            default => new StandardItemStrategy(),
        };
    }
}
