<?php
namespace App\Task_4\controllers;

use App\Task_4\models\Image;
use App\Task_4\models\FileImageLoader;
use App\Task_4\models\UrlImageLoader;
use App\Task_4\views\ImageView;

class ImageController
{
    private ImageView $view;

    public function __construct()
    {
        $this->view = new ImageView();
    }

    public function handle(): void
    {
        $result = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $strategy = $_POST['strategy'] ?? 'local';
            $src = trim($_POST['src'] ?? '');

            if ($strategy === 'local') {
                $loader = new FileImageLoader();
            } else {
                $loader = new UrlImageLoader();
            }

            $image = new Image($loader);
            $result = $image->load($src);
        }

        $this->view->render($result);
    }
}
