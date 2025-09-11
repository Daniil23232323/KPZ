<?php
namespace App\Task_2\models\Decorators;

use App\Task_2\models\interfaces\CharacterInterface;

class HeroClassDecorator implements CharacterInterface
{
    protected CharacterInterface $hero;

    protected int $extraHP = 0;
    protected int $extraAttack = 0;
    protected int $extraDefense = 0;

    public function __construct(CharacterInterface $hero, int $hpBonus = 0, int $attackBonus = 0, int $defenseBonus = 0)
    {
        $this->hero = $hero;
        $this->extraHP = $hpBonus;
        $this->extraAttack = $attackBonus;
        $this->extraDefense = $defenseBonus;
    }

    public function getHP(): int
    {
        return $this->hero->getHP() + $this->extraHP;
    }

    public function getName(): string
    {
        return $this->hero->getName();
    }

    public function getAttack(): int
    {
        return $this->hero->getAttack() + $this->extraAttack;
    }

    public function getDefense(): int
    {
        return $this->hero->getDefense() + $this->extraDefense;
    }

    public function setName(string $name): void
    {
        $this->hero->setName($name);
    }

    public function setHP(int $hp): void
    {
        $this->hero->setHP($hp);
    }

    public function setAttack(int $attack): void
    {
        $this->hero->setAttack($attack);
    }

    public function setDefense(int $defense): void
    {
        $this->hero->setDefense($defense);
    }

    public function applyArmor($armor): void
    {
        $this->hero->applyArmor($armor);
    }

    public function applyWeapon($weapon): void
    {
        $this->hero->applyWeapon($weapon);
    }

    public function applyArtifact($artifact): void
    {
        $this->hero->applyArtifact($artifact);
    }
}
