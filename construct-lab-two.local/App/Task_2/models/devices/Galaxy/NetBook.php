<?php

namespace App\Task_2\models\devices\Galaxy;

use App\Task_2\interfaces\Device;

class Netbook implements Device {
    public function getType(): string {
        return "Netbook";
    }
    public function getBrand(): string {
        return "Galaxy";
    }
    public function getSpecs(): string {
        return "Galaxy Netbook - 4GB RAM, 128GB SSD";
    }
}
