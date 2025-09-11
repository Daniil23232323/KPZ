<?php
namespace App\Task_5\models;

class Character {
    private $height;
    private $bodyType;
    private $hairColor;
    private $eyeColor;
    private $clothes;
    private $inventory = [];

    // Методи для встановлення властивостей
    public function setHeight($height) {
        $this->height = $height;
    }

    public function setBodyType($bodyType) {
        $this->bodyType = $bodyType;
    }

    public function setHairColor($hairColor) {
        $this->hairColor = $hairColor;
    }

    public function setEyeColor($eyeColor) {
        $this->eyeColor = $eyeColor;
    }

    public function setClothes($clothes) {
        $this->clothes = $clothes;
    }

    public function setInventory($inventory) {
        $this->inventory = $inventory;
    }

    // Метод для отримання всіх деталей персонажа
    public function getDetails() {
        return "Height: $this->height, BodyType: $this->bodyType, HairColor: $this->hairColor, EyeColor: $this->eyeColor, Clothes: $this->clothes, Inventory: " . implode(', ', $this->inventory);
    }
    public function getInventory() {
        return $this->inventory;
    }
}
?>
