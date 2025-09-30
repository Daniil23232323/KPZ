<?php
namespace App\Task_4\models;

use App\Task_4\interfaces\ImageLoaderStrategy;

class Image
{
    private $loaderStrategy;

    public function __construct(ImageLoaderStrategy $strategy)
    {
        $this->loaderStrategy = $strategy;
    }

    public function load(string $src): string
    {
        return $this->loaderStrategy->loadImage($src);
    }
}
?>
