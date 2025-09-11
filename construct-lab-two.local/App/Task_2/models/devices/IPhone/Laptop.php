<?php

namespace App\Task_2\models\devices\IPhone;

use App\Task_2\interfaces\Device;

class Laptop implements Device {
    public function getType(): string {
        return "Laptop";
    }
    public function getBrand(): string {
        return "IPhone";
    }
    public function getSpecs(): string {
        return "IPhone Laptop - 8GB RAM, 256GB SSD";
    }
}
