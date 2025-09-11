<?php
namespace App\interfaces;

interface IReport
{
    public function generateIncomeReport(): string;
    public function generateInventoryReport(): string;
}