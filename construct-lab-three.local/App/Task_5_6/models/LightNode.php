<?php

namespace App\Task_5_6\models;


use App\Task_5_6\models\interfaces\LightNodeInterface;

abstract class LightNode implements LightNodeInterface
{
    abstract public function render(): string;
}
