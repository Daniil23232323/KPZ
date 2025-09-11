<?php
namespace App\Task_2\models\Items;

use App\Task_2\models\interfaces\Item;

class Artifact implements Item
{
    protected int $hpBuff;

    public function __construct(int $hpBuff)
    {
        $this->hpBuff = $hpBuff;
    }

    public function baffAttack(): int { return 0; }
    public function baffDefense(): int { return 0; }
    public function baffHP(): int { return $this->hpBuff; }
    public function debaffAttack(): int { return 0; }
    public function debaffDefense(): int { return 0; }
    public function debaffHP(): int { return -$this->hpBuff; }
}
