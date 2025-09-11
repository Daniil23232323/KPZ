<?php
namespace App\Task_3\controllers;

use App\Task_3\models\figures\{Circle,Square, Triangle};

use App\Task_3\models\Renders\{RasterRenderer, VectorRenderer};

use App\Task_3\views\ShapeView;



class ShapeController
{
    public function handle(): void
    {
        $view = new ShapeView();

        if (!isset($_GET['shape']) || !isset($_GET['renderer'])) {
            $view->showForm();
            return;
        }

        $rendererType = $_GET['renderer'];
        $shapeType = $_GET['shape'];

        $renderer = match ($rendererType) {
            'vector' => new VectorRenderer(),
            'raster' => new RasterRenderer(),
            default => null
        };

        if (!$renderer) {
            $view->showError("Невідомий рендерер");
            return;
        }

        $shape = match ($shapeType) {
            'circle' => new Circle($renderer),
            'square' => new Square($renderer),
            'triangle' => new Triangle($renderer),
            default => null
        };

        if (!$shape) {
            $view->showError("Невідома фігура");
            return;
        }

        ob_start();
        $shape->draw();
        $result = ob_get_clean();

        $view->renderResult($result);
    }
}
