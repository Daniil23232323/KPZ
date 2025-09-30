<?php

namespace App\Task_3\models;

use App\Task_3\interfaces\LightNodeInterface;

abstract class LightNode implements LightNodeInterface
{
    protected $children = [];

    public function addChild(LightNode $child)
    {
        $this->children[] = $child;
    }

    public function getChildren()
    {
        return $this->children;
    }

    abstract public function renderOuterHTML();

    abstract public function renderInnerHTML();
}

