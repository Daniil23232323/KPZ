<?php
namespace App\Task_4\models\interfaces;

interface TextReaderInterface
{
    public function readFile(string $fileName): array;
}
