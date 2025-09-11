<?php
namespace App\Task_5\interfaces;

interface Builder {
    public function buildHeight($height);
    public function buildBodyType($bodyType);
    public function buildHairColor($hairColor);
    public function buildEyeColor($eyeColor);
    public function buildClothes($clothes);
    public function buildInventory($inventory);
    public function getResult();
}
?>
