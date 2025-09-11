<?php



namespace App\Task_2\interfaces;

interface Device
{
    public function getType(): string;

    public function getBrand(): string;

    public function getSpecs(): string;
}
