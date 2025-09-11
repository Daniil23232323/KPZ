<?php

namespace App\Task_2\models\devices\IPhone;

use App\Task_2\interfaces\Device;

class Netbook implements Device {
    public function getType(): string {
        return "Netbook";
    }
    public function getBrand(): string {
        return "IPhone";
    }
    public function getSpecs(): string {
        return "IPhone Netbook - 2GB RAM, 64GB SSD";
    }
}
