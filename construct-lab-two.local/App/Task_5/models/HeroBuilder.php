<?php
namespace App\Task_5\models;

use App\Task_5\interfaces\Builder;

class HeroBuilder implements Builder {
    private $character;

    public function __construct() {
        $this->character = new Character();
    }

    public function buildHeight($height) {
        $this->character->setHeight($height);
        return $this;
    }

    public function buildBodyType($bodyType) {
        $this->character->setBodyType($bodyType);
        return $this;
    }

    public function buildHairColor($hairColor) {
        $this->character->setHairColor($hairColor);
        return $this;
    }

    public function buildEyeColor($eyeColor) {
        $this->character->setEyeColor($eyeColor);
        return $this;
    }

    public function buildClothes($clothes) {
        $this->character->setClothes($clothes);
        return $this;
    }

    public function buildInventory($inventory) {
        $this->character->setInventory($inventory);
        return $this;
    }

    public function getResult() {
        return $this->character;
    }
}
?>
