<?php

namespace App\Task_4\interfaces;

interface ImageLoaderStrategy
{
    public function loadImage(string $src): string;
}
?>
