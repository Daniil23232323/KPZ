<?php

namespace App\Task_2\models\devices\Xiaomi;

use App\Task_2\interfaces\Device;

class Netbook implements Device {
    public function getType(): string {
        return "Netbook";
    }
    public function getBrand(): string {
        return "Xiaomi";
    }
    public function getSpecs(): string {
        return "Xiaomi Netbook - 3GB RAM, 64GB SSD";
    }
}
