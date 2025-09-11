<?php


namespace App\Task_4\models;

use App\Task_4\interfaces\Prototype;

class Virus implements Prototype
{
    private $name;
    private $weight;
    private $age;
    private $species;
    private $children = [];

    public function __construct($name, $weight, $age, $species)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->age = $age;
        $this->species = $species;
    }

    public function addChild(Virus $child)
    {
        $this->children[] = $child;
    }

    public function __clone()
    {
        $this->children = array_map(fn($child) => clone $child, $this->children);
    }

    public function getDetails(): array
    {
        $childrenNames = array_map(fn($child) => $child->name, $this->children);
        return [
            'name' => $this->name,
            'weight' => $this->weight,
            'age' => $this->age,
            'species' => $this->species,
            'children' => $childrenNames
        ];
    }
}
