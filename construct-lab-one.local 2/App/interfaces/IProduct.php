<?php

namespace App\interfaces;

interface IProduct {
    public function setPrice(IMoney $price): void;
    public function getPrice(): IMoney;
    public function applyDiscount(float $percent): void;
    public function getName(): string;
}