<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Task_1\controllers\SupportController;
use App\Task_2\controllers\AircraftController;
use App\Task_3\controllers\DomController;
use App\Task_4\controllers\ImageController;
use App\Task_5\controllers\TextEditorController;

echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Lab Menu</title></head><body>";

if (!isset($_GET['task'])) {
    // Меню вибору завдання
    echo "<h2>Оберіть лабораторну роботу</h2>";
    echo "<ul>";
    echo "<li><a href='?task=1'>Task 1</a></li>";
    echo "<li><a href='?task=2'>Task 2</a></li>";
    echo "<li><a href='?task=3'>Task 3</a></li>";
    echo "<li><a href='?task=4'>Task 4</a></li>";
    echo "<li><a href='?task=5'>Task 5</a></li>";

    echo "</ul>";
    echo "</body></html>";
    exit;
}

switch ($_GET['task']) {
    case '1':
        $controller = new SupportController();
        $controller->handle();
        break;
    case '2':
        $controller = new AircraftController();
        $controller->handle();
        break;
    case '3':
        $controller = new DomController();
        $controller->handle();
        break;
    case '4':
        $controller = new ImageController();
        $controller->handle();
        break;
    case '5':
        $controller = new TextEditorController();
        $controller->handle();
        break;
    default:
        echo "<p>Невірне завдання? <a href='index.php'>Повернутись на головну</a></p>";
}


echo "</body></html>";
