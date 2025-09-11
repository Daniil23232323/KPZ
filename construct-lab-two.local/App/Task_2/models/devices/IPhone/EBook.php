<?php

namespace App\Task_2\models\devices\IPhone;

use App\Task_2\interfaces\Device;

class EBook implements Device {
    public function getType(): string {
        return "EBook";
    }
    public function getBrand(): string {
        return "IPhone";
    }
    public function getSpecs(): string {
        return "IPhone EBook - 1GB RAM, 128GB eMMC";
    }
}
