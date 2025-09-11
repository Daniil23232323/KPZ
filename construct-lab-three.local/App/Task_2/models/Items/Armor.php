<?php
namespace App\Task_2\models\Items;

use App\Task_2\models\interfaces\Item;

class Armor implements Item
{
    protected int $defenseBuff;

    public function __construct(int $defenseBuff)
    {
        $this->defenseBuff = $defenseBuff;
    }

    public function baffAttack(): int { return 0; }
    public function baffDefense(): int { return $this->defenseBuff; }
    public function baffHP(): int { return 0; }
    public function debaffAttack(): int { return 0; }
    public function debaffDefense(): int { return -$this->defenseBuff; }
    public function debaffHP(): int { return 0; }
}