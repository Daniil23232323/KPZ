<?php
namespace App\Task_2\models;

class Aircraft
{
    private string $name;
    private CommandCentre $commandCentre;

    public function __construct(string $name, CommandCentre $commandCentre)
    {
        $this->name = $name;
        $this->commandCentre = $commandCentre;
    }

    public function requestLanding(): void
    {
        echo "✈️  {$this->name} запитує дозвіл на посадку...\n";
        $this->commandCentre->requestLanding($this);
    }

    public function requestTakeoff(): void
    {
        echo "✈️  {$this->name} запитує дозвіл на зліт...\n";
        $this->commandCentre->requestTakeoff($this);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
