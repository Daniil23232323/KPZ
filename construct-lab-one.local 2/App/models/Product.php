<?php
namespace App\models;
use App\interfaces\IMoney;
use App\interfaces\IProduct;
class Product implements IProduct
{
    private string $name;
    private IMoney $price;

    public function __construct(string $name, IMoney $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setPrice(IMoney $price): void {
        $this->price = $price;
    }

    public function getPrice(): IMoney {
        return $this->price;
    }

    public function applyDiscount(float $percent): void {
        $discountedWhole = (int) ($this->price->getAmount() * (1 - $percent / 100));
        $this->price->setAmount($discountedWhole, 0);
    }
}