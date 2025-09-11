<?php
namespace App\models;

use App\interfaces\{IProduct, IWarehouse, IMoney};

class Warehouse implements IWarehouse
{
    private array $stock = [];

    public function addProduct(IProduct $product, int $quantity): void {
        $this->stock[$product->getName()] = [
            'product' => $product,
            'quantity' => ($this->stock[$product->getName()]['quantity'] ?? 0) + $quantity,
        ];
    }

    public function removeProduct(string $productName, int $quantity): bool {
        if (isset($this->stock[$productName])) {
            if ($this->stock[$productName]['quantity'] >= $quantity) {
                $this->stock[$productName]['quantity'] -= $quantity;
                if ($this->stock[$productName]['quantity'] === 0) {
                    unset($this->stock[$productName]);
                }
                return true;
            }
        }
        return false;
    }

    public function getStock(): array {
        return $this->stock;
    }

}