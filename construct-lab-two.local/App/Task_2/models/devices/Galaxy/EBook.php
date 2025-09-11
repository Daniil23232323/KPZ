<?php

namespace App\Task_2\models\devices\Galaxy;

use App\Task_2\interfaces\Device;

class EBook implements Device {
    public function getType(): string {
        return "EBook";
    }
    public function getBrand(): string {
        return "Galaxy";
    }
    public function getSpecs(): string {
        return "Galaxy EBook - 1GB RAM, 256GB HDD";
    }
}
