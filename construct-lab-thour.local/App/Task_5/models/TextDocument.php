<?php
namespace App\Task_5\models;
class TextDocument
{
    private string $text = '';

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function createMemento(): Memento
    {
        return new Memento($this->text);
    }

    public function restoreMemento(Memento $memento): void
    {
        $this->text = $memento->getSavedState();
    }
}