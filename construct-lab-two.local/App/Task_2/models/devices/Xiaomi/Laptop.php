<?php

namespace App\Task_2\models\devices\Xiaomi;

use App\Task_2\interfaces\Device;

class Laptop implements Device {
    public function getType(): string {
        return "Laptop";
    }
    public function getBrand(): string {
        return "Xiaomi";
    }
    public function getSpecs(): string {
        return "Xiaomi Laptop - 12GB RAM, 1TB SSD";
    }
}
