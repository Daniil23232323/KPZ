<?php



namespace App\Task_2\models\factories;

use App\Task_2\interfaces\{Device, Factory};
use App\Task_2\models\devices\Xiaomi\{Laptop, Netbook, Smartphone, EBook};


class Xiaomi implements Factory
{
    public function createLaptop(): Device
    {
        return new Laptop();
    }

    public function createNetbook(): Device
    {
        return new Netbook();
    }

    public function createEBook(): Device
    {
        return new EBook();
    }

    public function createSmartphone(): Device
    {
        return new Smartphone();
    }
}
