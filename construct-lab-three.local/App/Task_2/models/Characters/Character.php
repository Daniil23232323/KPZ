<?php
namespace App\Task_2\models\Characters;

use App\Task_2\models\interfaces\CharacterInterface;
use App\Task_2\models\interfaces\Item;

class Character implements CharacterInterface
{
    protected int $hp = 100;
    protected int $attack = 5;
    protected int $defense = 5;
    protected string $name = 'Character';

    public function getHP(): int { return $this->hp; }
    public function getName(): string { return $this->name; }
    public function getAttack(): int { return $this->attack; }
    public function getDefense(): int { return $this->defense; }

    public function setName(string $name): void { $this->name = $name; }
    public function setHP(int $hp): void { $this->hp = $hp; }
    public function setAttack(int $attack): void { $this->attack = $attack; }
    public function setDefense(int $defense): void { $this->defense = $defense; }

    public function applyArmor(Item $armor): void
    {
        $this->defense += $armor->baffDefense();
    }

    public function applyWeapon(Item $weapon): void
    {
        $this->attack += $weapon->baffAttack();
    }

    public function applyArtifact(Item $artifact): void
    {
        $this->hp += $artifact->baffHP();
    }
}
