<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Task_1\controllers\LoggerController;
use App\Task_2\controllers\CharacterController;
use App\Task_3\controllers\ShapeController;
use App\Task_4\controllers\FileController;
use App\Task_5_6\controllers\BookController;

echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Lab Menu</title></head><body>";

if (!isset($_GET['task'])) {
    // Меню вибору завдання
    echo "<h2>Оберіть лабораторну роботу</h2>";
    echo "<ul>";
    echo "<li><a href='?task=1'>Task 1 — Adapter Logger</a></li>";
    echo "<li><a href='?task=2'>Task 2 — Decorator Character</a></li>";
    echo "<li><a href='?task=3'>Task 3 — Bridge Shaper</a></li>";
    echo "<li><a href='?task=4'>Task 4 — Proxy Reader</a></li>";
    echo "<li><a href='?task=5_6'>Task 5-6 — Light HTML</a></li>";

    echo "</ul>";
    echo "</body></html>";
    exit;
}

switch ($_GET['task']) {
    case '1':
        $controller = new LoggerController();
        $controller->handle();
        break;
    case '2':
        $controller = new CharacterController();
        $controller->handle();
        break;
    case '3':
        $controller = new ShapeController();
        $controller->handle();
        break;
    case '4':
        $controller = new FileController();
        $controller->handle();
        break;
    case '5_6':
        $controller = new BookController();
        $controller->handle();
        break;
    default:
        echo "<p>Невірне завдання? <a href='index.php'>Повернутись на головну</a></p>";
}


echo "</body></html>";
