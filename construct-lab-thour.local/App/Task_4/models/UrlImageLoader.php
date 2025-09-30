<?php

namespace App\Task_4\models;

use App\Task_4\interfaces\ImageLoaderStrategy;

class UrlImageLoader implements ImageLoaderStrategy
{
    public function loadImage(string $src): string
    {
        if (@getimagesize($src)) {
            return "<img src='{$src}' alt='Image from URL' />";
        } else {
            return "Image not found at the provided URL.";
        }
    }
}
?>
