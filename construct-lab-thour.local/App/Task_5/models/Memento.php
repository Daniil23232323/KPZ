<?php
namespace App\Task_5\models;
class Memento
{
    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function getSavedState(): string
    {
        return $this->state;
    }
}