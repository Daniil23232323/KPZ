<?php
namespace App\Task_3\models\interfaces;

interface RendererInterface {
    public function render(string $shapeName): void;
}