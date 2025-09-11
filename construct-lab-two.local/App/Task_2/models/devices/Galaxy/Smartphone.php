<?php

namespace App\Task_2\models\devices\Galaxy;

use App\Task_2\interfaces\Device;

class Smartphone implements Device {
    public function getType(): string {
        return "Smartphone";
    }
    public function getBrand(): string {
        return "Galaxy";
    }
    public function getSpecs(): string {
        return "Galaxy Smartphone - 8GB RAM, 128GB SSD";
    }
}
