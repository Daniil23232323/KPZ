<?php
namespace App\Task_2\models\devices\Galaxy;

use App\Task_2\interfaces\Device;

class Laptop implements Device {
    public function getType(): string {
        return "Laptop";
    }
    public function getBrand(): string {
        return "Galaxy";
    }
    public function getSpecs(): string {
        return "Galaxy Laptop - 16GB RAM, 512GB SSD";
    }
}