<?php

namespace App\Offer\Counter;

use Iterator;

interface OfferCollectionInterface
{
    public function get(int $index): ?OfferInterface;
    public function getIterator(): Iterator;
}
