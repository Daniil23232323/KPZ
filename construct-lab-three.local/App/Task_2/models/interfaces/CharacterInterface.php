<?php

namespace App\Task_2\models\interfaces;

interface CharacterInterface
{
    public function getHP(): int;

    public function getName(): string;

    public function getAttack(): int;

    public function getDefense(): int;

    public function setName(string $name): void;

    public function setHP(int $hp): void;

    public function setAttack(int $attack): void;

    public function setDefense(int $defense): void;

    public function applyArmor(Item $armor): void;

    public function applyWeapon(Item $weapon): void;

    public function applyArtifact(Item $artifact): void;
}
