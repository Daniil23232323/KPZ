<?php

namespace App\Task_2\models\devices\Xiaomi;

use App\Task_2\interfaces\Device;

class Smartphone implements Device {
    public function getType(): string {
        return "Smartphone";
    }
    public function getBrand(): string {
        return "Xiaomi";
    }
    public function getSpecs(): string {
        return "Xiaomi Smartphone - 12GB RAM, 512GB SSD";
    }
}
