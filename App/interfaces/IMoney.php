<?php
namespace App\interfaces;

interface IMoney{
    public function setAmount(int $whole, int $fraction): void;
    public function getAmount(): string;
}