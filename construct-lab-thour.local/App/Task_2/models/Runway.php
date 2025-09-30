<?php

namespace App\Task_2\models;
class Runway
{
    private string $id;
    private bool $isBusy = false;

    public function __construct()
    {
        $this->id = uniqid('runway_', true);
    }

    public function occupy(): void
    {
        $this->isBusy = true;
        echo "🛑 Злітна смуга {$this->id} зайнята!\n";
    }

    public function free(): void
    {
        $this->isBusy = false;
        echo "✅ Злітна смуга {$this->id} вільна!\n";
    }

    public function isBusy(): bool
    {
        return $this->isBusy;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
