<?php
namespace App\interfaces;

interface IWarehouse{
    public function addProduct(IProduct $product, int $quantity): void;
    public function removeProduct(string $productName, int $quantity): bool;
    public function getStock(): array;
}