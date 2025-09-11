<?php

namespace App\Task_2\controllers;

use App\Task_2\models\factories\{Galaxy, IPhone, Xiaomi};
use App\Task_2\views\DeviceView;

class DeviceController
{
    public function handle(): void
    {
        $view = new DeviceView();

        if (!isset($_GET['brand']) || !isset($_GET['device'])) {
            $view->showForm();
            return;
        }

        $brand = $_GET['brand'];
        $deviceType = $_GET['device'];

        $factory = match ($brand) {
            'Galaxy' => new Galaxy(),
            'IPhone' => new IPhone(),
            'Xiaomi' => new Xiaomi(),
            default => null
        };

        if (!$factory) {
            $view->printError("Невідомий бренд");
            return;
        }

        $device = match ($deviceType) {
            'Laptop' => $factory->createLaptop(),
            'Netbook' => $factory->createNetbook(),
            'EBook' => $factory->createEBook(),
            'Smartphone' => $factory->createSmartphone(),
            default => null
        };

        if (!$device) {
            $view->printError("Невідомий тип пристрою");
            return;
        }

        $view->render($device);
    }
}
