<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Task_1\controllers\SubscriptionController;
use App\Task_2\controllers\DeviceController;
use App\Task_3\controllers\AuthController;
use App\Task_4\controllers\VirusController;
use App\Task_5\controllers\CharacterController;

echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Lab Menu</title></head><body>";

if (!isset($_GET['task'])) {
    // Меню вибору завдання
    echo "<h2>Оберіть лабораторну роботу</h2>";
    echo "<ul>";
    echo "<li><a href='?task=1'>Task 1 — Subscription Factory</a></li>";
    echo "<li><a href='?task=2'>Task 2 — Abstract Device Factory</a></li>";
    echo "<li><a href='?task=3'>Task 3 — Singleton - IAuthenticator</a></li>";
    echo "<li><a href='?task=4'>Task 4 — Prototype Virus</a></li>";
    echo "<li><a href='?task=5'>Task 5 — Character Builder</a></li>";
    echo "</ul>";
    echo "</body></html>";
    exit;
}

switch ($_GET['task']) {
    case '1':
        $controller = new SubscriptionController();
        $controller->handle();
        break;

    case '2':
        $controller = new DeviceController();
        $controller->handle();
        break;

    case '3':
        $controller = new AuthController();
        $controller->handle();
        break;

    case '4':
        $controller = new VirusController();
        $controller->handle();
        break;

    case '5':
        $controller = new CharacterController();
        $controller->handle();
        break;

    default:
        echo "<p>Невірне завдання? <a href='index.php'>Повернутись на головну</a></p>";
}


echo "</body></html>";
