<?php

namespace App\Interface;

use App\Model\Item;

interface QualityStrategyInterface
{
    public function update(Item $item): void;
}
