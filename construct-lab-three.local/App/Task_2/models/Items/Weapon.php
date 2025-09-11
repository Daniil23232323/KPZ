<?php
namespace App\Task_2\models\Items;

use App\Task_2\models\interfaces\Item;

class Weapon implements Item
{
    protected int $attackBuff;

    public function __construct(int $attackBuff)
    {
        $this->attackBuff = $attackBuff;
    }

    public function baffAttack(): int { return $this->attackBuff; }
    public function baffDefense(): int { return 0; }
    public function baffHP(): int { return 0; }
    public function debaffAttack(): int { return -$this->attackBuff; }
    public function debaffDefense(): int { return 0; }
    public function debaffHP(): int { return 0; }
}



