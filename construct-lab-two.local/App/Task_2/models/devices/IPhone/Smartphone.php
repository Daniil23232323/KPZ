<?php

namespace App\Task_2\models\devices\IPhone;

use App\Task_2\interfaces\Device;

class Smartphone implements Device {
    public function getType(): string {
        return "Smartphone";
    }
    public function getBrand(): string {
        return "IPhone";
    }
    public function getSpecs(): string {
        return "IPhone Smartphone - 6GB RAM, 256GB SSD";
    }
}
