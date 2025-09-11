<?php

namespace App\Task_2\models\devices\Xiaomi;

use App\Task_2\interfaces\Device;

class EBook implements Device {
    public function getType(): string {
        return "EBook";
    }
    public function getBrand(): string {
        return "Xiaomi";
    }
    public function getSpecs(): string {
        return "Xiaomi EBook - 2GB RAM, 128GB HDD";
    }
}
