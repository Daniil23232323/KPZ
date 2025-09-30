<?php
namespace App\Task_5\models;
class Caretaker
{
    private array $mementos = [];

    public function saveMemento(Memento $memento)
    {
        $this->mementos[] = $memento;
    }

    public function restoreMemento(): ?Memento
    {
        return array_pop($this->mementos) ?? null;
    }
}