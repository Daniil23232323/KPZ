<?php

namespace App\Task_2\models\Decorators;

use App\Task_2\models\interfaces\Item;

class ItemDecorator implements Item
{
    protected Item $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function baffAttack(): int
    {
        return $this->item->baffAttack();
    }

    public function baffDefense(): int
    {
        return $this->item->baffDefense();
    }

    public function baffHP(): int
    {
        return $this->item->baffHP();
    }

    public function debaffAttack(): int
    {
        return $this->item->debaffAttack();
    }

    public function debaffDefense(): int
    {
        return $this->item->debaffDefense();
    }

    public function debaffHP(): int
    {
        return $this->item->debaffHP();
    }
}
