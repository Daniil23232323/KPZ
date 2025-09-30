<?php

namespace App\Task_4\models;

use App\Task_4\interfaces\ImageLoaderStrategy;

class FileImageLoader implements ImageLoaderStrategy
{
    public function loadImage(string $src): string
    {
        if (file_exists($src)) {
            return "<img src='{$src}' alt='Local Image' />";
        } else {
            return "Image not found in the local file system.";
        }
    }
}
?>
